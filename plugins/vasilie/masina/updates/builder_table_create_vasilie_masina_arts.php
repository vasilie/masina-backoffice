<?php namespace Vasilie\Masina\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasilieMasinaArts extends Migration
{
    public function up()
    {
        Schema::create('vasilie_masina_arts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vasilie_masina_arts');
    }
}
