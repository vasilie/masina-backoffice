<?php namespace Vasilie\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMedia2 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_media_', function($table)
        {
            $table->integer('id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_media_', function($table)
        {
            $table->dropPrimary(['id']);
            $table->string('id', 120)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
