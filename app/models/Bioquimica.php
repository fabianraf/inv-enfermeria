<?php

class Bioquimica extends Eloquent {
	protected $guarded = array();
	protected $table = 'bioquimicas';
	public static $rules = array(
	    'wbc'=>'required|numeric',
	    'neutrofilos'=>'required|numeric',
	    'linfocitos'=>'required|numeric',
	    'monocitos'=>'required|numeric',
	    'eosinofilos'=>'required|numeric',
	    'basofilos'=>'required|numeric',
	    'linfocitos_atipicos'=>'required|numeric',
	    'celulas_grandes_inmaduras'=>'required|numeric',
		'rbc'=>'required|numeric',	    
	    'hgb'=>'required|numeric',
	    'hct'=>'required|numeric',
	    'rdw'=>'required|numeric',
	    'plt'=>'required|numeric',
	    'mch'=>'required|numeric',
	    'mchc'=>'required|numeric',
	    'mcv'=>'required|numeric',
	    'colesterol'=>'required|numeric',
	    'hdl_colesterol'=>'required|numeric',
	    'trigliceridos'=>'required|numeric',
	    'glucosa_ayunas'=>'required|numeric',
	    'ldl_colesterol'=>'required|numeric',
	    'hbsag'=>'required|numeric'
	    );

	public function usuarios()
	{
        return $this->hasMany('User','usuario_id');
    }
}
