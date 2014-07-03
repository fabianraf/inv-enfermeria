<?php

class TipoEncuestas extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'tipo_encuestas';
	public static $rules = array();
	
	public function encabezadoPreguntasEncuesta()
		    {
	        return $this->hasMany('EncabezadoPreguntasEncuesta')->orderBy("created_at", "DESC");
		    }
	
}