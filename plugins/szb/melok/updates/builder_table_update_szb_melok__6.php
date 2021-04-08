<?php namespace Szb\Melok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbMelok6 extends Migration
{
    public function up()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->integer('sort_order')->default(1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->integer('sort_order')->default(null)->change();
        });
    }
}
