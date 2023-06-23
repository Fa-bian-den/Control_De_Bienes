<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',50);
            $table->text('Description');
            $table->text('Schedule');
            $table->integer('id_teachers')->unsigned();
            $table->foreign('id_teachers')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_sectors')->unsigned();
            $table->foreign('id_sectors')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_rooms')->unsigned();
            $table->foreign('id_rooms')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('careers');
    }
}
