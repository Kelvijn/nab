<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliography extends Migration
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
            $table->string('title');      
            $table->string('type');    
            $table->integer('volume_nr');            
            $table->integer('year');  
            $table->string('pages');       
            $table->string('academia_url');      
            $table->string('worldcat_url');        
            $table->string('other_url'); 
            $table->string('title_in_book');        
            
            
            
     
            
            
            
            
            
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
