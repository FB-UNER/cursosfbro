<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Curso::class)->times(4)->create();

		factory(App\Curso::class, 4)->create();

        // give each member some badges
        foreach(App\Curso::all() as $curso) {

            foreach(App\Campo::all() as $campo) {

                if (rand(1, 10) < 4) {
                        $curso->campos()->attach($campo->id);
                }
            }
            $curso->save();
        }

    }
}
