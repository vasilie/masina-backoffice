<?php namespace Vasilie\Masina\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMasinaPosts extends Migration
{
    public function up()
    {
        Schema::table('vasilie_masina_posts', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_masina_posts', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
