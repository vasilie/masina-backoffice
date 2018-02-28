<?php namespace Vasilie\Kreator\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieKreatorPosts6 extends Migration
{
    public function up()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('ghdjnfgfile', 'file');
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_kreator_posts', function($table)
        {
            $table->renameColumn('file', 'ghdjnfgfile');
        });
    }
}
