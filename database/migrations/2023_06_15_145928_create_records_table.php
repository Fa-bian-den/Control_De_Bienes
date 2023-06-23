<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Description');
            $table->date('Date');
            $table->integer('id_getins')->unsigned();
            $table->foreign('id_getins')->references('id')->on('getins')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_outputs')->unsigned();
            $table->foreign('id_outputs')->references('id')->on('outputs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('records');
    }
}
