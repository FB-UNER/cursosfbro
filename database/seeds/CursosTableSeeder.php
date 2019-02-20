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
    	$cantidadCursos = config('dataTest.CURSOS');
    	$cursosRecorrer = config('dataTest.CURSOS_RANDOM');

		factory(Curso::class)->times($cantidadCursos)->create();
        // give each member some badges
        foreach(App\Curso::all()->random($cursosRecorrer) as $curso) {
            foreach(App\Campo::all()->random(config('dataTest.CAMPOS_CURSOS')) as $campo) {
                        $curso->campos()->attach($campo->id, ['dato' => 'Pua']);
            }
            $curso->save();
        }

    }
}
