<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJabatanpanitiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatanpanitias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ormawa_id')->unsigned();
            $table->string('jabatanpanitia');
            $table->integer('urut_jabatanpanitia')->default(0);
            $table->timestamps();
        });
        Schema::table('jabatanpanitias', function(Blueprint $table){
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
        Schema::dropIfExists('jabatanpanitias');
    }
}
