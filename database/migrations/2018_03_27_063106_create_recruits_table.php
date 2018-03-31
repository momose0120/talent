<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('title');
            $table->string('job');
            $table->string('salary');
            $table->string('work_location');
            $table->string('work_hours');
            $table->string('work_period');
            $table->string('welfare');
            $table->string('main_image');
            $table->string('image_01');
            $table->string('image_02');
            $table->string('image_03');
            $table->string('image_04');
            $table->string('image_05');
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
        Schema::drop('recruits');
    }
}
