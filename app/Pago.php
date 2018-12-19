<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
  


    public function personas(){
	    	return $this->belongsToMany('\App\Persona','curso_pago_persona')
	     ->withPivot('curso_id','status'); 
	 } 
 
 	public function cursos(){ 
 			return $this->belongsToMany('\App\Curso','curso_pago_persona')
			->withPivot('pago_id','status'); 
	 }

}
