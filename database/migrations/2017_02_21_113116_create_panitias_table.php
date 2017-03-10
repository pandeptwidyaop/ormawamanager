<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanitiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panitias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kepanitiaan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('keanggotaan_id')->unsigned();
            $table->integer('jabatanpanitia_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('panitias', function (Blueprint $table) {
          $table->foreign('kepanitiaan_id')->references('id')->on('kepanitiaans')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onUpade('cascade')->onDelete('cascade');
          $table->foreign('keanggotaan_id')->references('id')->on('keanggotaans')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('jabatanpanitia_id')->references('id')->on('jabatanpanitias')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panitias');
    }
}
