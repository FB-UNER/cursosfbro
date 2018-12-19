<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    

	public function cursos(){

		return $this->belongsToMany('\App\Cursos','curso_personas')
	            ->withPivot('curso_id');
	}


 public function cursosPersona(){
        return $this->belongsToMany('\App\Curso','curso_pago_persona')
            ->withPivot('pago_id','status');
    }
 
    public function pagos(){
        return $this->belongsToMany('\App\Pago','curso_pago_persona')
            ->withPivot('curso_id','status'); 
    }


}
