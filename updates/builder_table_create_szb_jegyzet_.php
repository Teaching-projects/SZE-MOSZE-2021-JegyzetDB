<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSzbJegyzet extends Migration
{
    public function up()
    {
        Schema::create('szb_jegyzet_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('author')->nullable()->default('unknown');
            $table->integer('appearance')->nullable();
            $table->boolean('is_pdf');
            $table->timestamp('deleted_at')->nullable();
            $table->integer('is_order')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('szb_jegyzet_');
    }
}
