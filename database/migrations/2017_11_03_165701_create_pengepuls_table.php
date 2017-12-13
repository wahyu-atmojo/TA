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
            $table->increments('id_pengepul');
            $table->string('nama_pengepul');
            $table->integer('id_desa')->unsigned();
            $table->decimal('longitude', 10,8);
            $table->decimal('latitude',11, 8);
            $table->text('deskripsi');
            $table->text('foto');

            

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
