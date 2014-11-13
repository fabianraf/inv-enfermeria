<?php

class Antropometrias extends Eloquent {
	protected $guarded = array();
	protected $table = 'antropometrias';
	
	public static $rules = array(
	    'peso'=>'required|numeric',
	    'talla'=>'required||numeric|between:1,3',
	    'circunferencia_cintura'=>'required|numeric',
	    'circunferencia_cadera'=>'required|numeric',
	    'circunferencia_media_brazo'=>'required|numeric',
	    'pliegue_bicipital'=>'required|numeric',
	    'pliegue_tricipital'=>'required|numeric',
	    'pliegue_subescapular'=>'required|numeric',
	    'pliegue_suprailiaco'=>'required|numeric'
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
