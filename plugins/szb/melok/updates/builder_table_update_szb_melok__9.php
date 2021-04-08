<?php namespace Szb\Melok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbMelok9 extends Migration
{
    public function up()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->integer('sort_order')->nullable(false)->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->integer('sort_order')->nullable()->default(null)->change();
        });
    }
}
