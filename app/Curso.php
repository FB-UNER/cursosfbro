<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    
	public function personas(){

		return $this->belongsToMany('\App\Persona','curso_personas')
	            ->withPivot('persona_id');
	}


	public function personasCurso(){
	    	return $this->belongsToMany('\App\Persona','curso_pago_persona')
	     ->withPivot('pago_id','status'); 
	 } 
 
 	public function pagos(){ 
 			return $this->belongsToMany('\App\Pago','curso_pago_persona')
			->withPivot('persona_id','status'); 
 }


 public function campos(){
	    	return $this->belongsToMany('\App\Campo','campo_curso')
	     ->withPivot('campo_id'); 
	 } 

}
