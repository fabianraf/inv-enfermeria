<?php

class EncuestaAlimentosUniversidad extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'encuestas_alimentos_universidad';
	public static $rules = array();
	
	public function usuario()
	    {
        return $this->belongsTo('Usuario');
	    }
			
	public function alimento()
	    {
        return $this->belongsTo('Alimento');
	    }
	
}
