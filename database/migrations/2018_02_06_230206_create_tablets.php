<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablets', function (Blueprint $table) {
            //identification
            $table->increments('id');
            $table->string('museum_no')->nullable();
            $table->string('collection_no')->nullable();
            $table->string('text_no_publication')->nullable();
            $table->string('page_no_publication')->nullable(); 
            $table->integer('publications_id')->nullable();
            $table->integer('periods_id')->nullable();
            


            $table->integer('kings_id')->nullable();

            $table->integer('king_remarks_id')->unsigned()->nullable();
            

            $table->foreign('king_remarks_id')->references('id')->on('remarks')->nullable();


            $table->integer('year')->default(1);
            $table->integer('year_remarks_id')->nullable();
            $table->integer('months_id')->nullable();
            $table->integer('month_remarks_id')->nullable();
            $table->integer('day')->nullable()->default(1);
            $table->integer('day_remarks_id')->nullable();
            $table->string('babylonian_date_remark')->nullable();
            $table->dateTime('gregorian')->nullable();
            $table->string('gregorian_date_remark')->nullable();
            $table->string('cdli_no')->nullable();

            //physical
            $table->integer('tablet_types_id')->nullable();
            $table->double('width')->nullable()->default(1);
            $table->double('height')->nullable()->default(1);
            $table->double('thickness')->nullable()->default(1);
            $table->string('dimensions_remark')->nullable();
            $table->integer('orientations_id')->nullable();

            $table->string('philological_remark')->nullable();
            
            //content
            $table->integer('text_types_id')->nullable();
            $table->string('content_remark')->nullable();
            $table->integer('paraphrases_id')->nullable();
            
            

            
            

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
        Schema::dropIfExists('tablets');
    }
}
