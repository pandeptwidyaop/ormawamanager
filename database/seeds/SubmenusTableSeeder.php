<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SubmenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submenus')->insert([
          [
            'menu_id' => 2,
            'nama_submenu' => 'Jabatan',
            'link_submenu' => 'pengurus/jabatan',
            'icon_submenu' => 'fa fa-align-center'
          ],
          [
            'menu_id' => 10,
            'nama_submenu' => 'Nomor Surat',
            'link_submenu' => 'suratkeluar/nomorsurat',
            'icon_submenu' => 'fa fa-database'
          ],
          [
            'menu_id' => 5,
            'nama_submenu' => 'Bidang Kegiatan',
            'link_submenu' => 'kegiatan/bidangkegiatan',
            'icon_submenu' => 'fa fa-asterisk'
          ],
          [
            'menu_id' => 6,
            'nama_submenu' => 'Panitia',
            'link_submenu' => 'kepanitiaan/panitia',
            'icon_submenu' => 'fa fa-bars'
          ],
          [
            'menu_id' => 6,
            'nama_submenu' => 'Jabatan Panitia',
            'link_submenu' => 'kepanitiaan/jabatanpanitia',
            'icon_submenu' => 'fa fa-align-center'
          ],
          [
            'menu_id' => 7,
            'nama_submenu' => 'Uang Kas',
            'link_submenu' => 'pemasukan/uangkas',
            'icon_submenu' => 'fa fa-money'
          ]
        ]);
    }
}
