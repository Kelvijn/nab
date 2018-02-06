<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliographies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('short_title');      
            $table->string('title');   
            $table->string('year');  
            $table->string('pages');        
            $table->string('author');  
            $table->integer('volume_nr');
            $table->string('bibliography_types_id');
            
            
            
            
            
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
        Schema::dropIfExists('bibliographies');
    }
}
