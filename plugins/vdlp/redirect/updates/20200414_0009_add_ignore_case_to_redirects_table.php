<?php

declare(strict_types=1);

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Psr\Log\LoggerInterface;

class AddIgnoreCaseToRedirectsTable extends Migration
{
    public function up(): void
    {
        Schema::table('vdlp_redirect_redirects', static function (Blueprint $table) {
            $table->boolean('ignore_case')
                ->default(false)
                ->after('ignore_query_parameters');
        });
    }

    public function down(): void
    {
        try {
            Schema::table('vdlp_redirect_redirects', static function (Blueprint $table) {
                $table->dropColumn('ignore_case');
            });
        } catch (Throwable $e) {
            resolve(LoggerInterface::class)->error(sprintf(
                'Vdlp.Redirect: Unable to drop column `%s` from table `%s`: %s',
                'ignore_case',
                'vdlp_redirect_redirects',
                $e->getMessage()
            ));
        }
    }
}
