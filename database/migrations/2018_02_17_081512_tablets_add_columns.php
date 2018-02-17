<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabletsAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paraphrases', function($table) {
            $table->integer('museum_no')->nullable();
            
        });
        Schema::table('transliterations', function($table) {
            $table->integer('museum_no')->nullable();
            
        });
        Schema::table('tablets_paraphrases', function($table) {
            $table->integer('museum_no')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transliterations', function($table) {
            $table->dropColumn('museum_no');
            
        });
        Schema::table('paraphrases', function($table) {
            $table->dropColumn('museum_no');
            
        });
        Schema::table('tablets_paraphrases', function($table) {
            $table->integer('museum_no')->nullable();
            
        });
    }
}
