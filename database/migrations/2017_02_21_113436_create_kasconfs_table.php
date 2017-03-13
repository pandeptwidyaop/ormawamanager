<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKasconfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasconfs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ormawa_id')->unsigned();
            $table->integer('periode_id')->unsigned();
            $table->integer('uang_kas')->default(0);
            $table->timestamps();
        });
        Schema::table('kasconfs', function(Blueprint $table) {
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
        Schema::dropIfExists('kasconfs');
    }
}
