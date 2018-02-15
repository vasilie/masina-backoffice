<?php namespace Vasilie\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVasilieMedia extends Migration
{
    public function up()
    {
        Schema::table('vasilie_media_', function($table)
        {
            $table->string('title', 600);
            $table->string('type', 100);
            $table->string('img', 100);
            $table->string('text', 100);
        });
    }
    
    public function down()
    {
        Schema::table('vasilie_media_', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('type');
            $table->dropColumn('img');
            $table->dropColumn('text');
        });
    }
}
