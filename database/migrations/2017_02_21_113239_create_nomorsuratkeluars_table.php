<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomorsuratkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomorsuratkeluars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomorsuratkeluarconf_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('nomor_suratkeluar');
            $table->timestamps();
        });
        Schema::table('nomorsuratkeluars', function(Blueprint $table){
          $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('nomorsuratkeluarconf_id')->references('id')->on('nomorsuratkeluarconfs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomorsuratkeluars');
    }
}
