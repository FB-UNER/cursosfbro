<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PagosTableSeeder::class);
        $this->call(CamposTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(PersonasTableSeeder::class);
    }
}
