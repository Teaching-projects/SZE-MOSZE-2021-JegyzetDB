<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbJegyzet5 extends Migration
{
    public function up()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->string('faculty')->nullable();
            $table->string('subject')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->dropColumn('faculty');
            $table->dropColumn('subject');
        });
    }
}
