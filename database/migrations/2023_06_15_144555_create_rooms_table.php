<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',50);
            $table->string('Address',100);
            $table->integer('id_sectors')->unsigned();
            $table->foreign('id_sectors')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_materials')->unsigned();
            $table->foreign('id_materials')->references('id')->on('materials')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
