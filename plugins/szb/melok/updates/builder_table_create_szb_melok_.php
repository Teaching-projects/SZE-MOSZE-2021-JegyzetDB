<?php namespace Szb\Melok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSzbMelok extends Migration
{
    public function up()
    {
        Schema::create('szb_melok_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('short_description');
            $table->text('tags');
            $table->text('description');
            $table->string('sender');
            $table->integer('visitors')->nullable()->default(0);
            $table->boolean('highlighted');
            $table->boolean('is_activated');
            $table->dateTime('created_date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('szb_melok_');
    }
}
