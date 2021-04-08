<?php

declare(strict_types=1);

namespace Vdlp\Redirect\Models;

use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Arr;
use Illuminate\Support\Fluent;
use Illuminate\Validation\Validator;
use October\Rain\Database\Builder;
use October\Rain\Database\Model;
use October\Rain\Database\Relations\HasMany;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use Vdlp\Redirect\Classes\OptionHelper;

/**
 * @method static Redirect|Builder enabled()
 * @method static Redirect|Builder testLabEnabled()
 */
final class Redirect extends Model
{
    use Sortable {
        setSortableOrder as traitSetSortableOrder;
    }

    use Validation {
        makeValidator as traitMakeValidator;
    }

    // Types
    public const TYPE_EXACT = 'exact';
    public const TYPE_PLACEHOLDERS = 'placeholders';
    public const TYPE_REGEX = 'regex';

    // Target Types
    public const TARGET_TYPE_PATH_URL = 'path_or_url';
    public const TARGET_TYPE_CMS_PAGE = 'cms_page';
    public const TARGET_TYPE_STATIC_PAGE = 'static_page';
    public const TARGET_TYPE_NONE = 'none';

    // Scheme options
    public const SCHEME_HTTP = 'http';
    public const SCHEME_HTTPS = 'https';
    public const SCHEME_AUTO = 'auto';

    /**
     * @var array
     */
    public static $types = [
        self::TYPE_EXACT,
        self::TYPE_PLACEHOLDERS,
        self::TYPE_REGEX,
    ];

    /**
     * @var array
     */
    public static $targetTypes = [
        self::TARGET_TYPE_PATH_URL,
        self::TARGET_TYPE_CMS_PAGE,
        self::TARGET_TYPE_STATIC_PAGE,
        self::TARGET_TYPE_NONE,
    ];

    /**
     * @var array
     */
    public static $statusCodes = [
        301 => 'permanent',
        302 => 'temporary',
        303 => 'see_other',
        404 => 'not_found',
        410 => 'gone',
    ];

    /**
     * {@inheritDoc}
     */
    public $table = 'vdlp_redirect_redirects';

    /**
     * {@inheritDoc}
     */
    protected $guarded = [];

    /**
     * Validation rules.
     *
     * @var array
     */
    public $rules = [
        'from_url' => 'required',
        'from_scheme' => 'in:http,https,auto',
        'to_url' => 'different:from_url|required_if:target_type,path_or_url',
        'to_scheme' => 'in:http,https,auto',
        'cms_page' => 'required_if:target_type,cms_page',
        'static_page' => 'required_if:target_type,static_page',
        'match_type' => 'required|in:exact,placeholders,regex',
        'target_type' => 'required|in:path_or_url,cms_page,static_page,none',
        'status_code' => 'required|in:301,302,303,404,410',
        'sort_order' => 'numeric',
    ];

    /**
     * Custom validation messages.
     *
     * @var array
     */
    public $customMessages = [
        'to_url.required_if' => 'vdlp.redirect::lang.redirect.to_url_required_if',
        'cms_page.required_if' => 'vdlp.redirect::lang.redirect.cms_page_required_if',
        'static_page.required_if' => 'vdlp.redirect::lang.redirect.static_page_required_if',
        'is_regex' => 'vdlp.redirect::lang.redirect.invalid_regex'
    ];

    /**
     * {@inheritDoc}
     */
    public $jsonable = [
        'requirements',
    ];

    /**
     * Custom attribute names.
     *
     * @var array
     */
    public $attributeNames = [
        'to_url' => 'vdlp.redirect::lang.redirect.to_url',
        'to_scheme' => 'vdlp.redirect::lang.redirect.to_scheme',
        'from_url' => 'vdlp.redirect::lang.redirect.from_url',
        'from_scheme' => 'vdlp.redirect::lang.redirect.to_scheme',
        'match_type' => 'vdlp.redirect::lang.redirect.match_type',
        'target_type' => 'vdlp.redirect::lang.redirect.target_type',
        'cms_page' => 'vdlp.redirect::lang.redirect.target_type_cms_page',
        'static_page' => 'vdlp.redirect::lang.redirect.target_type_static_page',
        'status_code' => 'vdlp.redirect::lang.redirect.status_code',
        'from_date' => 'vdlp.redirect::lang.scheduling.from_date',
        'to_date' => 'vdlp.redirect::lang.scheduling.to_date',
        'sort_order' => 'vdlp.redirect::lang.redirect.sort_order',
        'requirements' => 'vdlp.redirect::lang.redirect.requirements',
        'last_used_at' => 'vdlp.redirect::lang.redirect.last_used_at',
    ];

    /**
     * {@inheritDoc}
     */
    protected $dates = [
        'from_date',
        'to_date',
        'last_used_at',
    ];

    /**
     * {@inheritDoc}
     */
    protected $casts = [
        'ignore_query_parameters' => 'boolean',
        'ignore_case' => 'boolean',
        'ignore_trailing_slash' => 'boolean',
        'is_enabled' => 'boolean',
        'test_lab' => 'boolean',
        'system' => 'boolean',
    ];

    /**
     * {@inheritDoc}
     */
    public $hasMany = [
        'clients' => Client::class,
        'logs' => RedirectLog::class,
    ];

    /**
     * {@inheritDoc}
     */
    public $belongsTo = [
        'category' => Category::class,
    ];

    protected static function makeValidator(
        array $data,
        array $rules,
        array $customMessages = [],
        array $attributeNames = []
    ): Validator {
        $validator = self::traitMakeValidator($data, $rules, $customMessages, $attributeNames);

        $validator->sometimes('to_url', 'required', static function (Fluent $request) {
            return in_array($request->get('status_code'), ['301', '302', '303'], true)
                && $request->get('target_type') === self::TARGET_TYPE_PATH_URL;
        });

        $validator->sometimes('cms_page', 'required', static function (Fluent $request) {
            return in_array($request->get('status_code'), ['301', '302', '303'], true)
                && $request->get('target_type') === self::TARGET_TYPE_CMS_PAGE;
        });

        $validator->sometimes('static_page', 'required', static function (Fluent $request) {
            return in_array($request->get('status_code'), ['301', '302', '303'], true)
                && $request->get('target_type') === self::TARGET_TYPE_STATIC_PAGE;
        });

        $validator->sometimes('from_url', 'is_regex', static function (Fluent $request) {
            return $request->get('match_type') === self::TYPE_REGEX;
        });

        return $validator;
    }

    /**
     * @noinspection PhpUnused
     */
    public function scopeEnabled(Builder $builder): Builder
    {
        return $builder->where('is_enabled', '=', true);
    }

    /**
     * @noinspection PhpUnused
     */
    public function scopeTestLabEnabled(Builder $builder): Builder
    {
        return $builder->where('test_lab', '=', true);
    }

    public function isMatchTypeExact(): bool
    {
        return $this->attributes['match_type'] === self::TYPE_EXACT;
    }

    /**
     * @noinspection PhpUnused
     */
    public function isMatchTypePlaceholders(): bool
    {
        return $this->attributes['match_type'] === self::TYPE_PLACEHOLDERS;
    }

    /**
     * @noinspection PhpUnused
     */
    public function isMatchTypeRegex(): bool
    {
        return $this->attributes['match_type'] === self::TYPE_REGEX;
    }

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * {@inheritDoc}
     */
    public function setSortableOrder($itemIds, array $itemOrders = null): void
    {
        $itemIds = array_map(static function ($itemId) {
            return (int) $itemId;
        }, Arr::wrap($itemIds));

        /** @var Dispatcher $dispatcher */
        $dispatcher = resolve(Dispatcher::class);
        $dispatcher->dispatch('vdlp.redirect.changed', ['redirectIds' => $itemIds]);

        $this->traitSetSortableOrder($itemIds, $itemOrders);
    }

    /**
     * @noinspection PhpUnused
     */
    public function setFromUrlAttribute($value): void
    {
        $this->attributes['from_url'] = urldecode((string) $value);
    }

    /**
     * @noinspection PhpUnused
     */
    public function setSortOrderAttribute($value): void
    {
        $this->attributes['sort_order'] = (int) $value;
    }

    /**
     * @noinspection PhpUnused
     */
    public function getFromDateAttribute($value): ?Carbon
    {
        if ($value === '' || $value === null) {
            return null;
        }

        return new Carbon($value);
    }

    /**
     * @noinspection PhpUnused
     */
    public function getToDateAttribute($value): ?Carbon
    {
        if ($value === '' || $value === null) {
            return null;
        }

        return new Carbon($value);
    }

    /**
     * @noinspection PhpUnused
     */
    public function getMatchTypeOptions(): array
    {
        $options = [];

        foreach (self::$types as $value) {
            $options[$value] = e(trans("vdlp.redirect::lang.redirect.$value"));
        }

        return $options;
    }

    /**
     * @noinspection PhpUnused
     */
    public function getTargetTypeOptions(): array
    {
        return OptionHelper::getTargetTypeOptions((int) $this->getAttribute('status_code'));
    }

    /**
     * @noinspection PhpUnused
     */
    public function getCmsPageOptions(): array
    {
        return OptionHelper::getCmsPageOptions();
    }

    /**
     * @noinspection PhpUnused
     */
    public function getStaticPageOptions(): array
    {
        return OptionHelper::getStaticPageOptions();
    }

    /**
     * @noinspection PhpUnused
     */
    public function getCategoryOptions(): array
    {
        return OptionHelper::getCategoryOptions();
    }

    /**
     * @noinspection PhpUnused
     */
    public function filterMatchTypeOptions(): array
    {
        $options = [];

        foreach (self::$types as $value) {
            $options[$value] = e(trans("vdlp.redirect::lang.redirect.$value"));
        }

        return $options;
    }

    /**
     * @noinspection PhpUnused
     */
    public function filterTargetTypeOptions(): array
    {
        $options = [];

        foreach (self::$targetTypes as $value) {
            $options[$value] = e(trans("vdlp.redirect::lang.redirect.target_type_$value"));
        }

        return $options;
    }

    /**
     * @noinspection PhpUnused
     */
    public function filterStatusCodeOptions(): array
    {
        $options = [];

        foreach (self::$statusCodes as $value => $message) {
            $options[$value] = e(trans("vdlp.redirect::lang.redirect.$message"));
        }

        return $options;
    }

    /**
     * Triggered before the model is saved, either created or updated.
     * Make sure target fields are correctly set after saving.
     *
     * @throws Exception
     */
    public function beforeSave(): void
    {
        parent::beforeSave();

        switch ($this->getAttribute('target_type')) {
            case self::TARGET_TYPE_NONE:
                $this->setAttribute('to_url', null);
                $this->setAttribute('cms_page', null);
                $this->setAttribute('static_page', null);
                $this->setAttribute('to_scheme', self::SCHEME_AUTO);
                break;
            case self::TARGET_TYPE_PATH_URL:
                $this->setAttribute('cms_page', null);
                $this->setAttribute('static_page', null);
                break;
            case self::TARGET_TYPE_CMS_PAGE:
                $this->setAttribute('to_url', null);
                $this->setAttribute('static_page', null);
                break;
            case self::TARGET_TYPE_STATIC_PAGE:
                $this->setAttribute('to_url', null);
                $this->setAttribute('cms_page', null);
                break;
        }
    }

    public function isActiveOnDate(Carbon $date): bool
    {
        if ($this->getAttribute('from_date') instanceof Carbon
            && $this->getAttribute('to_date') instanceof Carbon
        ) {
            return $date->between(
                $this->getAttribute('from_date'),
                $this->getAttribute('to_date')
            );
        }

        if ($this->getAttribute('from_date') instanceof Carbon
            && $this->getAttribute('to_date') === null
        ) {
            return $date->gte($this->getAttribute('from_date'));
        }

        if ($this->getAttribute('to_date') instanceof Carbon
            && $this->getAttribute('from_date') === null
        ) {
            return $date->lte($this->getAttribute('to_date'));
        }

        return true;
    }
}
