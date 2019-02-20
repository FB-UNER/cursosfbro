<?php

use Illuminate\Database\Seeder;
use App\Persona;
use App\Curso;
use App\Pago;

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

     $listaPersona = App\Persona::all()->random(5);
        // give each member some badges
        //foreach(App\Persona::all()->ramdom(4) as $persona) {
		foreach($listaPersona as $persona) {
            foreach(App\Curso::all()->random(5) as $curso) {
                        $persona->cursos()->attach($curso->id);
                        $persona->pagos()->attach(1,['curso_id'=> $curso->id, 'status'=>true]);
                        
            }
            $persona->save();
        }



    }
}
