<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
 
    public function cursos(){
	    	return $this->belongsToMany('\App\Curso','campo_curso')
	     ->withPivot('curso_id'); 
	 } 
 
 /*
 public function personas(){
	    	return $this->belongsToMany('\App\Persona','campo_curso_persona')
	     ->withPivot('persona_id'); 
	 }
*/
}
