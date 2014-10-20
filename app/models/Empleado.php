<?php

class Empleado extends Eloquent {
	protected $guarded = array();
	protected $tabe = "empleados";
	public static $rules = array();

	public function empresa()
	    {
        return $this->belongsTo('Empresa');
	    }
}
