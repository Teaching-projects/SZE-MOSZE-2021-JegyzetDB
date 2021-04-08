<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbJegyzet2 extends Migration
{
    public function up()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
