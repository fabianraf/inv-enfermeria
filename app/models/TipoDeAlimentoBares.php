<?php

class TipoDeAlimentoBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'tipo_de_alimentos_bares';
	public static $rules = array(
	    'nombre'=>'required|min:2'
	    );
	
	public function alimentosBares()
		    {
	        return $this->hasMany('AlimentoBares')->orderBy("created_at", "DESC");
		    }
}
