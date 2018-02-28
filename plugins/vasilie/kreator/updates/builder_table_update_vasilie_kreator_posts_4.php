<?php namespace Vasilie\Kreator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieKreatorPosts4 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('poster', 'file');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('file', 'poster');
        });
    }
}
