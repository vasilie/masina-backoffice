<?php namespace Vasilie\Kreator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVasilieKreatorPosts extends Migration
{
    public function up()
    {
        Schema::create('vasilie_kreator_posts', function($table)
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
        Schema::dropIfExists('vasilie_kreator_posts');
    }
}
