<?php

class Bioquimica extends Eloquent {
	protected $guarded = array();
	protected $table = 'bioquimicas';
	public static $rules = array(
	    'wbc'=>'required|numeric|min:0',
	    'neutrofilos'=>'required|numeric|min:0',
	    'linfocitos'=>'required|numeric|min:0',
	    'monocitos'=>'required|numeric|min:0',
	    'eosinofilos'=>'required|numeric|min:0',
	    'basofilos'=>'required|numeric|min:0',
	    'linfocitos_atipicos'=>'required|numeric|min:0',
	    'celulas_grandes_inmaduras'=>'required|numeric|min:0',
		'rbc'=>'required|numeric|min:0',	    
	    'hgb'=>'required|numeric|min:0',
	    'hct'=>'required|numeric|min:0',
	    'rdw'=>'required|numeric|min:0',
	    'plt'=>'required|numeric|min:0',
	    'mch'=>'required|numeric|min:0',
	    'mchc'=>'required|numeric|min:0',
	    'mcv'=>'required|numeric|min:0',
	    'colesterol'=>'required|numeric|min:0',
	    'hdl_colesterol'=>'required|numeric|min:0',
	    'trigliceridos'=>'required|numeric|min:0',
	    'glucosa_ayunas'=>'required|numeric|min:0',
	    'ldl_colesterol'=>'required|numeric|min:0',
	    'hbsag'=>'required|numeric|min:0'
	    );

	public function usuarios()
	{
        return $this->hasMany('User','usuario_id');
    }
}
