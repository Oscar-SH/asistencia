<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_students')->unsigned();
            $table->bigInteger('id_subjects')->unsigned();
            $table->bigInteger('id_teachers')->unsigned();
            $table->bigInteger('id_gropus')->unsigned();
            $table->foreign('id_students')->references('id')->on('students');
            $table->foreign('id_subjects')->references('id')->on('subjects');
            $table->foreign('id_teachers')->references('id')->on('teachers');
            $table->foreign('id_gropus')->references('id')->on('gropus');
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
        Schema::dropIfExists('asistens');
    }
}
