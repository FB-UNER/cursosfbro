<?php

use Illuminate\Database\Seeder;
use App\Persona;
use App\Curso;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     factory(Persona::class)->times(10)->create();


        // give each member some badges
        foreach(App\Persona::all() as $persona) {

            foreach(App\Curso::all() as $curso) {

                if (rand(1,4)) {
                        $persona->cursos()->attach($curso->id);
                }
            }
            $persona->save();
        }



    }
}
