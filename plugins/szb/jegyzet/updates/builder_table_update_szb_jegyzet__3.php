<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbJegyzet3 extends Migration
{
    public function up()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->binary('pdf_file')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->dropColumn('pdf_file');
        });
    }
}
