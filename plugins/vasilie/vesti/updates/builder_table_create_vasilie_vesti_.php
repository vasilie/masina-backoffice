<?php namespace Vasilie\Vesti\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasilieVesti extends Migration
{
    public function up()
    {
        Schema::create('vasilie_vesti_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vasilie_vesti_');
    }
}
