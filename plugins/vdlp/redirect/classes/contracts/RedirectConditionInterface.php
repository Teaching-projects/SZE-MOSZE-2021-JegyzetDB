<?php

declare(strict_types=1);

namespace Vdlp\Redirect\Classes\Contracts;

use Vdlp\Redirect\Classes\RedirectRule;

interface RedirectConditionInterface
{
    public const TAB_NAME = 'Conditions';

    /**
     * A unique code which identifies this redirect condition.
     *
     * CAUTION: The resulting value of this method will be used to store the
     * parameters of this condition in the database. Make sure you never change
     * the code after releasing your code to the public.
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Describes the condition.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Should return a clear explanation of what this condition is for.
     *
     * @return string
     */
    public function getExplanation(): string;

    /**
     * Whether this redirect condition passes.
     *
     * When a condition passes the redirect will take place, otherwise the
     * request will be handled as any other.
     *
     * @param RedirectRule $rule
     * @param string $requestUri
     * @return bool
     */
    public function passes(RedirectRule $rule, string $requestUri): bool;

    /**
     * @return array
     */
    public function getFormConfig(): array;
}
