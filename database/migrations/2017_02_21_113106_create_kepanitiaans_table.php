<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepanitiaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepanitiaans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kegiatan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('nama_kepanitiaan');
            $table->timestamp('tanggal_pembentukan_kepanitiaan');
            $table->timestamps();
        });
        Schema::table('kepanitiaans', function (Blueprint $table) {
          $table->foreign('kegiatan_id')->references('id')->on('kegiatans')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('kepanitiaans');
    }
}
