<?php

class ResultadoEncuestasAlimentosUniversidad extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'resultados_encuestas_alimentos_universidad';
	public static $rules = array();
	
	public function usuario()
	    {
        return $this->belongsTo('Usuario');
	    }	
}