<?php namespace Szb\Jegyzet\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSzbJegyzet extends Migration
{
    public function up()
    {
        Schema::dropIfExists('szb_jegyzet_');
    }
    
    public function down()
    {
        Schema::create('szb_jegyzet_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->string('author', 191)->nullable()->default('unknown');
            $table->integer('appearance')->nullable();
            $table->boolean('is_pdf');
            $table->timestamp('deleted_at')->nullable();
            $table->integer('is_order')->nullable()->default(0);
            $table->date('created_at');
            $table->date('updated_at');
            $table->string('slug', 191);
            $table->binary('pdf_file')->nullable();
        });
    }
}
