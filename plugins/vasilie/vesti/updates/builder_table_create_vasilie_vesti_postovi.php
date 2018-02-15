<?php namespace Vasilie\Vesti\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasilieVestiPostovi extends Migration
{
    public function up()
    {
        Schema::create('vasilie_vesti_postovi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('text');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vasilie_vesti_postovi');
    }
}
