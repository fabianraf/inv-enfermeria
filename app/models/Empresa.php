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
		return $this->hasMany('Empleado');
	}

	public function encuestaManipulacionAlimentos()
	{
		return $this->hasMany('EncuestaManipulacionAlimento');
	}

	public function encuestaManipulacionProductosAlimenticios()
	{
		return $this->hasMany('EncuestaManipulacionProductosAlimenticio');
	}	

	public function encuestaManipulacionControlDePlagas()
	{
		return $this->hasMany('EncuestaManipulacionControlPlaga');
	}

	public function encuestaManipulacionArea($codigo_area)
	{
		return EncuestaManipulacionArea::where("codigo_area", "=", $codigo_area)->where("empresa_id", "=", $this->id);
		
	}	

	public function delete(){
		 $this->encuestaManipulacionAlimentos()->delete();
		 foreach($this->empleados as $empleado){
		 	$empleado->delete();
		 }
		 $this->empleados()->delete();
		 $this->encuestaManipulacionProductosAlimenticios()->delete();
		 $this->encuestaManipulacionControlDePlagas()->delete();
		 EncuestaManipulacionArea::where("empresa_id", "=", $this->id)->delete();
		 return parent::delete();
	}


}
