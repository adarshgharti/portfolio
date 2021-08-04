<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Util\Xml\SchemaFinder;

class EditBlogsTable extends Migration
{
    public function up()
    {
        Schema::table('blogs', function(Blueprint $table){
            $table->integer('user_id')->after('body');
        });
    }
    
    public function down()
    {
        Schema::table('blogs', function(Blueprint $table){
            Schema::dropColumn('user_id');
        });
    }
}
