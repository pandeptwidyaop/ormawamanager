<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
          //1
          [
            'nama_menu' => 'Anggota',
            'link_menu' => 'anggota',
            'id_menu' => '#menuanggota',
            'icon_menu' => 'fa fa-graduation-cap'
          ],
          //2
          [
            'nama_menu' => 'Pengurus',
            'link_menu' => 'pengurus',
            'id_menu' => '#menupengurus',
            'icon_menu' => 'fa fa-user-secret'
          ],
          //3
          [
            'nama_menu' => 'Rapat',
            'link_menu' => 'rapat',
            'id_menu' => '#menurapat',
            'icon_menu' => 'fa fa-comments'
          ],
          //4
          [
            'nama_menu' => 'Absen',
            'link_menu' => 'absen',
            'id_menu' => '#menuabsen',
            'icon_menu' => 'fa fa-book'
          ],
          //5
          [
            'nama_menu' => 'Kegiatan',
            'link_menu' => 'kegiatan',
            'id_menu' => '#menukegiatan',
            'icon_menu' => 'fa fa-cogs'
          ],
          //6
          [
            'nama_menu' => 'Kepanitiaan',
            'link_menu' => 'kepanitiaan',
            'id_menu' => '#menukepanitiaan',
            'icon_menu' => 'fa fa-university'
          ],
          //7
          [
            'nama_menu' => 'Pemasukan',
            'link_menu' => 'pemasukan',
            'id_menu' => '#menupemasukan',
            'icon_menu' => 'fa fa-download'
          ],
          //8
          [
            'nama_menu' => 'Pengeluaran',
            'link_menu' => 'pengeluaran',
            'id_menu' => '#menupengeluaran',
            'icon_menu' => 'fa fa-download'
          ],
          //9
          [
            'nama_menu' => 'Surat Masuk',
            'link_menu' => 'suratmasuk',
            'id_menu' => '#menusuratmasuk',
            'icon_menu' => 'fa fa-sign-in'
          ],
          //10
          [
            'nama_menu' => 'Surat Keluar',
            'link_menu' => 'suratkeluar',
            'id_menu' => '#menusuratkeluar',
            'icon_menu' => 'fa fa-sign-out'
          ],
          //11
          [
            'nama_menu' => 'User',
            'link_menu' => 'user',
            'id_menu' => '#menuuser',
            'icon_menu' => 'fa fa-user'
          ],
          //12
          [
            'nama_menu' => 'Manajemen Periode',
            'link_menu' => 'manajemenperiode',
            'id_menu' => '#menumanajemenperiode',
            'icon_menu' => 'fa fa-graduation-cap'
          ],
          //13
          [
            'nama_menu' => 'Manajemen Users',
            'link_menu' => 'manajemenuser',
            'id_menu' => '#menumanajemenperiode',
            'icon_menu' => 'fa fa-users'
          ]
        ]);
    }
}
