<?php

class AlimentoBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'alimentos_bares';
	public static $rules = array();
	
	public function tipoDeAlimentoBares()
	    {
        return $this->belongsTo('TipoDeAlimentoBares');
	    }
	
}
