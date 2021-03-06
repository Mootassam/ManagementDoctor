<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {

            $table->bigIncrements('id');
             $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('special_id');
            $table->foreign('special_id')->references('id')->on('specialites');

           /* $table->string('name');
            $table->string('lastname');
            $table->text('avatar') ;
            $table->string('email') ;
            $table->string('password');
            $table->text('bio') ;
            $table->integer('tel') ;
            $table->text('imgCin'); */

            $table->float('prixVisite');
            $table->integer('active');
            $table->integer('visible');
            $table->text('verifHach');
            $table->string('latitude');
            $table->string('longitude');



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
        Schema::dropIfExists('doctors');
    }
}
