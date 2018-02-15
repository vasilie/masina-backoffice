<?php namespace Vasilie\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasilieMedia extends Migration
{
    public function up()
    {
        Schema::create('vasilie_media_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id', 120);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vasilie_media_');
    }
}
