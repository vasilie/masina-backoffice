<?php namespace Vasilie\Masina\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMasinaArts extends Migration
{
    public function up()
    {
        Schema::table('vasilie_masina_arts', function($table)
        {
            $table->string('img');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_masina_arts', function($table)
        {
            $table->dropColumn('img');
            $table->increments('id')->unsigned()->change();
        });
    }
}
