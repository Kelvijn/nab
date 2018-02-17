<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabletsAddTabletRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tablets_tablets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tablets_id')->nullable();
            $table->integer('museum_noo')->nullable();
            $table->integer('tablet_types_id')->nullable();
            
            
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
        //
        Schema::dropIfExists('tablets_tablets');
    }
}
