<?php namespace Szb\Melok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbMelok3 extends Migration
{
    public function up()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->binary('image');
        });
    }
    
    public function down()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
