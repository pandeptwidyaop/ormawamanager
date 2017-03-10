<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
          'nim_anggota' => '150030003',
          'nama_anggota' => 'Pande Putu Widya Oktapratama',
          'nama_panggilan_anggota' => 'Pande',
          'alamat_anggota' => 'Jalan Gunung Agung Gang Bumi Ayu G. No 17 Denpasar Barat',
          'handphone_anggota' => '085737484960',
          'status_anggota' => 'internal'
        ]);
    }
}
