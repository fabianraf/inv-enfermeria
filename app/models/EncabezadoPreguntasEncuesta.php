<?php

class EncabezadoPreguntasEncuesta extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'encabezado_preguntas_encuestas';
	public static $rules = array();
	
	public function usuario()
	    {
        return $this->belongsTo('TipoEncuestas');
	    }
			
	
	
}
