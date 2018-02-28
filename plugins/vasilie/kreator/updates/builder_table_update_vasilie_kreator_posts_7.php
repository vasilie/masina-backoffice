<?php namespace Vasilie\Kreator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieKreatorPosts7 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->dropColumn('file');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->string('file', 255)->nullable();
        });
    }
}
