<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('kasconf_id')->unsigned();
            $table->integer('keanggotaan_id')->unsigned();
            $table->date('tgl_bayar_kas');
            $table->boolean('bayar_kas')->default(0);
            $table->timestamps();
        });
        Schema::table('kas', function(Blueprint $table) {
          $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('keanggotaan_id')->references('id')->on('keanggotaans')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('kasconf_id')->references('id')->on('kasconfs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kas');
    }
}
