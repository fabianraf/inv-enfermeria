<?php

class Empresa extends Eloquent {
	protected $guarded = array();
	protected $table = 'empresas';
	public static $rules = array(
		 'nombre'=>'required'
		);

	public function empleados()
	{
		return $this->hasMany('Empleados');
	}
}
