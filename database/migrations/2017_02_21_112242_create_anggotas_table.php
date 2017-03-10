<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nim_anggota',9)->unique();
            $table->string('nama_anggota');
            $table->string('nama_panggilan_anggota');
            $table->string('alamat_anggota');
            $table->string('handphone_anggota');
            $table->enum('status_anggota',['internal','external'])->default('internal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
