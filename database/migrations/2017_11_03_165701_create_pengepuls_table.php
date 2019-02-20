<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengepulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('pengepuls', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama_pengepul');
            $table->integer('id_desa')->unsigned();
            $table->string('longitude');
            $table->string('latitude');
            $table->text('deskripsi');
            $table->text('foto');
            $table->timestamps();

            

            $table->foreign('id_desa')->references('id')->on('desas');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengepuls');
    }
}
