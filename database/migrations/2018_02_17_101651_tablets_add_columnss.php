<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabletsAddColumnss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('paraphrases', function($table) {
            $table->boolean('released')->nullable();
            
        });
        Schema::table('transliterations', function($table) {
            $table->boolean('released')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('transliterations', function($table) {
            $table->dropColumn('released');
            
        });
        Schema::table('paraphrases', function($table) {
            $table->dropColumn('released');
            
        });
    }
}
