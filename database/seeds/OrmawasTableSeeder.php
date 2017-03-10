<?php

use Illuminate\Database\Seeder;

class OrmawasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ormawas')->insert([
          'nama_ormawa' => 'UKM PROGRESS',
          'tgl_lahir_ormawa' => '2012-10-19',
          'deskripsi_ormawa' => 'PROGRESS MOVEON'
        ]);
    }
}
