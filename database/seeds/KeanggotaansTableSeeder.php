<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class KeanggotaansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keanggotaans')->insert([
          'anggota_id' => 1,
          'periode_id' => 1
        ]);
    }
}
