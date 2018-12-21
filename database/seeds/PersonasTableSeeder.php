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

     $listaPersona = App\Persona::all()->random(2);
        // give each member some badges
        //foreach(App\Persona::all()->ramdom(4) as $persona) {
		foreach($listaPersona as $persona) {
            foreach(App\Curso::all()->random(3) as $curso) {
                        $persona->cursos()->attach($curso->id);
            }
            $persona->save();
        }



    }
}
