<?php

class Antropometrias extends Eloquent {
	protected $guarded = array();
	protected $table = 'antropometrias';
	
	public static $rules = array(
	    'peso'=>'required|numeric|min:0',
	    'talla'=>'required|numeric|between:1,3',
	    'circunferencia_cintura'=>'required|numeric|min:0',
	    'circunferencia_cadera'=>'required|numeric|min:0',
	    'circunferencia_media_brazo'=>'required|numeric|min:0',
	    'pliegue_bicipital'=>'required|numeric|min:0',
	    'pliegue_tricipital'=>'required|numeric|min:0',
	    'pliegue_subescapular'=>'required|numeric|min:0',
	    'pliegue_suprailiaco'=>'required|numeric|min:0'
	    );

	public static $messages = array(
		'talla.between' => 'La talla del estudiante debe ser ingresada en metros',
		'password_confirm.same' => 'Las contraseñas no coinciden, vuelva a ingresarlas'
		);

	public function usuarios()
	{
        return $this->hasMany('User','usuario_id');
    }
   
}
