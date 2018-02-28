<?php namespace Vasilie\Kreator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieKreatorPosts5 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('file', 'ghdjnfgfile');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('ghdjnfgfile', 'file');
        });
    }
}
