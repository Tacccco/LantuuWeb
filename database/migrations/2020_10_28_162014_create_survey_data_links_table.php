<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyDataLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_data_links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('links');
            $table->integer('surveyData_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::table('survey_data_links', function (Blueprint $table) {
            $table->foreign('surveyData_id')->references('id')->on('survey_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_data_links');
    }
}
