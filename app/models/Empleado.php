<?php

class Empleado extends Eloquent {
	protected $guarded = array();
	protected $tabe = "empleados";
	public static $rules = array(
		'nombre' => 'required',
		'cargo' => 'required'
		);

	public function empresa()
	    {
        return $this->belongsTo('Empresa');
	    }

 	public function encuestasControlHigienePersonal()
	    {
	    return $this->hasMany('EncuestaControlHigiene');
	    }

	public function delete(){
		 $this->encuestasControlHigienePersonal()->delete();
		 return parent::delete();
	}
}
