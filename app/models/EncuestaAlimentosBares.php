<?php

class EncuestaAlimentosBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'encuestas_alimentos_bares';
	public static $rules = array();
	
	public function usuario()
	    {
        return $this->belongsTo('Usuario');
	    }
			
	public function alimentoBares()
	    {
        return $this->belongsTo('AlimentoBares');
	    }
	
}