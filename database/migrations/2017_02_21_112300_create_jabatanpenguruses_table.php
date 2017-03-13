<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJabatanpengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatanpenguruses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ormawa_id')->unsigned();
            $table->string('jabatanpengurus');
            $table->integer('urut_jabatanpengurus')->defaut(0);
            $table->timestamps();
        });
        Schema::table('jabatanpenguruses', function(Blueprint $table){
          $table->foreign('ormawa_id')->references('id')->on('ormawas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatanpenguruses');
    }
}
