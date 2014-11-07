<?php

class Empresa extends Eloquent {
	protected $guarded = array();
	protected $table = 'empresas';
	public static $rules = array(
		 'nombre'=>'required',
		 'fecha' => 'required'
		);

	public function empleados()
	{
		return $this->hasMany('Empleados');
	}

	public function encuestaManipulacionComedorAlimentos()
	{
		return $this->hasMany('EncuestaManipulacionComedorAlimento');
	}

	public function encuestaManipulacionComedorProductosAlimenticios()
	{
		return $this->hasMany('EncuestaManipulacionComedorProductosAlimenticio');
	}	

	public function encuestaManipulacionComedorControlDePlagas()
	{
		return $this->hasMany('EncuestaManipulacionComedorControlPlaga');
	}

	public function encuestaManipulacionComedorArea($codigo_area)
	{
		return EncuestaManipulacionComedorArea::where("codigo_area", "=", $codigo_area)->where("empresa_id", "=", $this->id);
		
	}	

}
