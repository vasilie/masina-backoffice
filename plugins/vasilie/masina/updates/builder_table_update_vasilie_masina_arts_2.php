<?php namespace Vasilie\Masina\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMasinaArts2 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_masina_arts', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_masina_arts', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
