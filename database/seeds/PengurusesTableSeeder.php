<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class PengurusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('penguruses')->insert([
        'keanggotaan_id' => 1,
        'jabatanpengurus_id' => 13
      ]);
    }
}
