<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MenugroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menugroups')->insert([
          [
            'level' => 1,
            'menu_id' => 12,
            'urut_menugroup' => 1
          ],
          [
            'level' => 1,
            'menu_id' => 13,
            'urut_menugroup' => 2
          ],
          [
            'level' => 2,
            'menu_id' => 1,
            'urut_menugroup' => 1
          ],
          [
            'level' => 2,
            'menu_id' => 2,
            'urut_menugroup' => 2
          ],
          [
            'level' => 2,
            'menu_id' => 3,
            'urut_menugroup' => 3
          ],
          [
            'level' => 2,
            'menu_id' => 4,
            'urut_menugroup' => 4
          ],
          [
            'level' => 2,
            'menu_id' => 5,
            'urut_menugroup' => 5
          ],
          [
            'level' => 2,
            'menu_id' => 6,
            'urut_menugroup' => 6
          ],
          [
            'level' => 2,
            'menu_id' => 7,
            'urut_menugroup' => 9
          ],
          [
            'level' => 2,
            'menu_id' => 8,
            'urut_menugroup' => 10
          ],
          [
            'level' => 2,
            'menu_id' => 9,
            'urut_menugroup' => 7
          ],
          [
            'level' => 2,
            'menu_id' => 10,
            'urut_menugroup' => 8
          ],
          [
            'level' => 2,
            'menu_id' => 11,
            'urut_menugroup' => 11
          ],
          [
            'level' => 3,
            'menu_id' => 1,
            'urut_menugroup' => 1
          ],
          [
            'level' => 3,
            'menu_id' => 2,
            'urut_menugroup' => 2
          ],
          [
            'level' => 3,
            'menu_id' => 3,
            'urut_menugroup' => 3
          ],
          [
            'level' => 3,
            'menu_id' => 4,
            'urut_menugroup' => 4
          ],
          [
            'level' => 3,
            'menu_id' => 5,
            'urut_menugroup' => 5
          ],
          [
            'level' => 3,
            'menu_id' => 6,
            'urut_menugroup' => 6
          ],
          [
            'level' => 3,
            'menu_id' => 9,
            'urut_menugroup' => 7
          ],
          [
            'level' => 3,
            'menu_id' => 10,
            'urut_menugroup' => 8
          ],
          [
            'level' => 4,
            'menu_id' => 7,
            'urut_menugroup' => 1
          ],
          [
            'level' => 4,
            'menu_id' => 8,
            'urut_menugroup' => 2
          ]
        ]);
    }
}
