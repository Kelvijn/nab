<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliographies_authors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bibliographies_id')->nullable();            
            $table->integer('authors_id')->nullable();
            $table->string('type')->nullable();   
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliographies_authors');
    }
}
