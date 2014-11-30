<?php

class ResultadoEncuestasAlimentosBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'resultados_encuestas_alimentos_bares';
	public static $rules = array();
	
	public function usuario()
	    {
        return $this->belongsTo('Usuario');
	    }	
}