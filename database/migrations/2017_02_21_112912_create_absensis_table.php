<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('absensi_id')->unsigned();
          $table->integer('keanggotaan_id')->unsigned();
          $table->enum('absensi',['hadir','ijin','alpha'])->default('alpha');
          $table->timestamps();
        });
        Schema::table('absensis', function (Blueprint $table) {
          $table->foreign('absensi_id')->references('id')->on('rapats')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('keanggotaan_id')->references('id')->on('keanggotaans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
