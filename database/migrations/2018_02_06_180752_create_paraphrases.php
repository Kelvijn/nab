<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParaphrases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paraphrases', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('body')->nullable();
            $table->integer('cms_users_id')->nullable();
            $table->integer('tablets_id')->nullable();
            
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
        Schema::dropIfExists('paraphrases');
    }
}
