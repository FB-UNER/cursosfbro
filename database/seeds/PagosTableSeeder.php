<?php

use Illuminate\Database\Seeder;
use App\Pago;
class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pago::class)->times(10)->create();
    }
}
