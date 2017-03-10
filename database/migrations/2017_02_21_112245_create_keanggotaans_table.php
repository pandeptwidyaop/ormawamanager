<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeanggotaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keanggotaans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned();
            $table->integer('periode_id')->unsigned();
            $table->integer('ormawa_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('keanggotaans', function(Blueprint $table) {
          $table->foreign('anggota_id')->references('id')->on('anggotas')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('periode_id')->references('id')->on('periodes')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('ormawa_id')->references('id')->on('ormawas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keanggotaans');
    }
}
