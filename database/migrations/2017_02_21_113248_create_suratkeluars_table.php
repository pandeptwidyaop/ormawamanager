<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomorsuratkeluar_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('perihal_suratkeluar');
            $table->timestamp('tanggal_suratkeluar');
            $table->timestamps();
        });
        Schema::table('suratkeluars', function(Blueprint $table){
          $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('nomorsuratkeluar_id')->references('id')->on('nomorsuratkeluars')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratkeluars');
    }
}
