<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JabatanpengurusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('jabatanpenguruses')->insert([
        [
          'jabatanpengurus' => 'KETUA UMUM',
          'urut_jabatanpengurus' => 1
        ],
        [
          'jabatanpengurus' => 'WAKIL KETUA',
          'urut_jabatanpengurus' => 2
        ],
        [
          'jabatanpengurus' => 'SEKRTARIS I',
          'urut_jabatanpengurus' => 3
        ],
        [
          'jabatanpengurus' => 'SEKRTARIS II',
          'urut_jabatanpengurus' => 4
        ],
        [
          'jabatanpengurus' => 'BENDAHARA I',
          'urut_jabatanpengurus' => 5
        ],
        [
          'jabatanpengurus' => 'BENDAHARA II',
          'urut_jabatanpengurus' => 6
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG I',
          'urut_jabatanpengurus' => 7
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG I',
          'urut_jabatanpengurus' => 8
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG II',
          'urut_jabatanpengurus' => 9
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG II',
          'urut_jabatanpengurus' => 10
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG III',
          'urut_jabatanpengurus' => 11
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG III',
          'urut_jabatanpengurus' => 12
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG IV',
          'urut_jabatanpengurus' => 13
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG IV',
          'urut_jabatanpengurus' => 14
        ]
      ]);
    }
}
