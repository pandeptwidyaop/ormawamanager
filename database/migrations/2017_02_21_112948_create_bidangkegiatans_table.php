<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidangkegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidangkegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ormawa_id')->unsigned();
            $table->string('bidangkegiatan');
            $table->timestamps();
        });
        Schema::table('bidangkegiatans', function(Blueprint $table){
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
        Schema::dropIfExists('bidangkegiatans');
    }
}
