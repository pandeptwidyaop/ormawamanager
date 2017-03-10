<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrmawasTableSeeder::class);
        $this->call(PeriodesTableSeeder::class);
        $this->call(AnggotasTableSeeder::class);
        $this->call(KeanggotaansTableSeeder::class);
        $this->call(JabatanpengurusesTableSeeder::class);
        $this->call(PengurusesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(SubmenusTableSeeder::class);
        $this->call(MenugroupsTableSeeder::class);
    }
}
