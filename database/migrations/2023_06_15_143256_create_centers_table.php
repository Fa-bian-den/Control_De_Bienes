<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',80);
            $table->string('Address',100);
            $table->string('Cellphone',15);
            $table->string('E_Mail',100);
            $table->integer('Amount_Pavilions');
            $table->integer('id_sectors')->unsigned();
            $table->foreign('id_sectors')->references('id')->on('sectors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('centers');
    }
}
