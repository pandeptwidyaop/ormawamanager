<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomorsuratkeluarconfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomorsuratkeluarconfs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('periode_id')->unsigned();
            $table->integer('current')->default(0);
            $table->string('letter')->default('/HIMAPRODI.SI/SEMA.STIKOM/');
            $table->timestamps();
        });
        Schema::table('nomorsuratkeluarconfs', function(Blueprint $table) {
          $table->foreign('periode_id')->references('id')->on('periodes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomorsuratkeluarconfs');
    }
}
