<?php namespace Szb\Melok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSzbMelok2 extends Migration
{
    public function up()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->text('expectations')->nullable();
            $table->text('offering')->nullable();
            $table->text('education')->nullable();
            $table->text('experience')->nullable();
            $table->text('language')->nullable();
            $table->text('jobnature')->nullable();
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('slug');
            $table->renameColumn('sender', 'sender_name');
        });
    }
    
    public function down()
    {
        Schema::table('szb_melok_', function($table)
        {
            $table->dropColumn('expectations');
            $table->dropColumn('offering');
            $table->dropColumn('education');
            $table->dropColumn('experience');
            $table->dropColumn('language');
            $table->dropColumn('jobnature');
            $table->dropColumn('sender_phone');
            $table->dropColumn('sender_email');
            $table->dropColumn('slug');
            $table->renameColumn('sender_name', 'sender');
        });
    }
}
