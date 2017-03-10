<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'pengurus_id' => 1,
          'email' => 'widya.oktapratama@gmail.com',
          'password' => '$2y$10$i4jUynQmJCasks5ZNv.zouH5z18/dDD2VwkCQMQMkBlL11QpO4Pni',
          'level' => 2,
          'image_user' => 'user.png'
        ]);
    }
}
