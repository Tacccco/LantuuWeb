<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');
            $table->integer('age');
            $table->char('sex', 10);
            $table->text('occupation');
            $table->text('citizenship');
            $table->char('phoneNumber', 15);
            $table->char('reserveNumber', 15);
            $table->string('emailAddress');
            $table->string('facebookAddress');
            $table->text('interest');
            $table->mediumText('activity');
            $table->mediumText('selfExpectation');
            $table->mediumText('volunteering');
            $table->text('advantage');
            $table->text('disadvantage');
            $table->text('purpose');
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
        Schema::dropIfExists('surveys_datas');
    }
}
