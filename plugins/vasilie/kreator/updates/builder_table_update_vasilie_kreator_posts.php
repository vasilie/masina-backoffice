<?php namespace Vasilie\Kreator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieKreatorPosts extends Migration
{
    public function up()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('img', 'poster');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('poster', 'img');
        });
    }
}
