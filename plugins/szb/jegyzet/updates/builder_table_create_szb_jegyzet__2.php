<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSzbJegyzet2 extends Migration
{
    public function up()
    {
        Schema::create('szb_jegyzet_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('author')->nullable();
            $table->integer('appearance');
            $table->boolean('is_pdf');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('szb_jegyzet_');
    }
}
