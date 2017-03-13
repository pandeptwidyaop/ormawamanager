<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PeriodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodes')->insert([
          ['periode' => '2015/2016'],
          ['periode' => '2016/2017']
        ]);
    }
}
