<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRapatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategorirapat_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('judul_rapat');
            $table->timestamp('tanggal_rapat');
            $table->text('isi_rapat');
            $table->timestamps();
        });
        Schema::table('rapats', function (Blueprint $table) {
          $table->foreign('kategorirapat_id')->references('id')->on('kategorirapats')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rapats');
    }
}
