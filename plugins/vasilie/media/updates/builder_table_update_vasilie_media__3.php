<?php namespace Vasilie\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMedia3 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_media_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_media_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
