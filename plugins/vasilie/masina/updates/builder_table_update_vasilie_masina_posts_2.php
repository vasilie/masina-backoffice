<?php namespace Vasilie\Masina\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMasinaPosts2 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_masina_posts', function($table)
        {
            $table->integer('sort');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_masina_posts', function($table)
        {
            $table->dropColumn('sort');
        });
    }
}
