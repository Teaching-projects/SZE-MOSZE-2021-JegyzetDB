<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbJegyzet6 extends Migration
{
    public function up()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->dropColumn('pdf_file');
        });
    }
    
    public function down()
    {
        Schema::table('szb_jegyzet_', function($table)
        {
            $table->binary('pdf_file')->nullable();
        });
    }
}
