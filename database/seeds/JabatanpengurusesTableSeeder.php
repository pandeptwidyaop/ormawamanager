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
          'urut_jabatanpengurus' => 1,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'WAKIL KETUA',
          'urut_jabatanpengurus' => 2,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'SEKRTARIS I',
          'urut_jabatanpengurus' => 3,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'SEKRTARIS II',
          'urut_jabatanpengurus' => 4,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'BENDAHARA I',
          'urut_jabatanpengurus' => 5,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'BENDAHARA II',
          'urut_jabatanpengurus' => 6,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG I',
          'urut_jabatanpengurus' => 7,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG I',
          'urut_jabatanpengurus' => 8,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG II',
          'urut_jabatanpengurus' => 9,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG II',
          'urut_jabatanpengurus' => 10,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG III',
          'urut_jabatanpengurus' => 11,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG III',
          'urut_jabatanpengurus' => 12,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'KOODINATOR BIDANG IV',
          'urut_jabatanpengurus' => 13,
          'ormawa_id' => 1
        ],
        [
          'jabatanpengurus' => 'ANGGOTA BIDANG IV',
          'urut_jabatanpengurus' => 14,
          'ormawa_id' => 1
        ]
      ]);
    }
}
