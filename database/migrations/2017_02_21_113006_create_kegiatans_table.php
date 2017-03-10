<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bidangkegiatan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('kegiatan');
            $table->enum('bulan_kegiatan',['januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember']);
            $table->integer('uang_kegiatan');
            $table->timestamps();
        });
        Schema::table('kegiatans', function (Blueprint $table) {
          $table->foreign('bidangkegiatan_id')->references('id')->on('bidangkegiatans')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
}
