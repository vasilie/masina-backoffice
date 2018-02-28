<?php namespace Vasilie\Masina\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasilieMasinaPosts extends Migration
{
    public function up()
    {
        Schema::create('vasilie_masina_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('img')->nullable();
            $table->string('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vasilie_masina_posts');
    }
}
