<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getins', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->text('Description');
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
        Schema::dropIfExists('getins');
    }
}
