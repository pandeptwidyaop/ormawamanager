<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penguruses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('keanggotaan_id')->unsigned();
            $table->integer('jabatanpengurus_id')->unsigned();
            $table->string('image_pengurus')->default('pengurus.png');
            $table->timestamps();
        });
        Schema::table('penguruses', function (Blueprint $table) {
          $table->foreign('keanggotaan_id')->references('id')->on('keanggotaans')->onUpdate('cascade')->onDelete('cascade');
          $table->foreign('jabatanpengurus_id')->references('id')->on('jabatanpenguruses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penguruses');
    }
}
