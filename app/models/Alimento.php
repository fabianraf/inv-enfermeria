<?php

class Alimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'alimentos';
	public static $rules = array();
	
	public function tipoDeAlimento()
	    {
        return $this->belongsTo('TipoDeAlimento');
	    }
	
}
