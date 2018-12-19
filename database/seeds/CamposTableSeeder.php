<?php

use Illuminate\Database\Seeder;
use App\Campo;

class CamposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Campo::class)->times(48)->create();
    }
}
