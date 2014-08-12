<?php

class Antropometrias extends Eloquent {
	protected $guarded = array();
	protected $table = 'antropometrias';
	
	public static $rules = array(
	    'peso'=>'required|numeric',
	    'talla'=>'required|numeric',
	    'circunferencia_cintura'=>'required|numeric',
	    'circunferencia_cadera'=>'required|numeric',
	    'circunferencia_media_brazo'=>'required|numeric',
	    'pliegue_bicipital'=>'required|numeric',
	    'pliegue_tricipital'=>'required|numeric',
	    'pliegue_subescapular'=>'required|numeric',
	    'pliegue_suprailiaco'=>'required|numeric'
	    );

	public function usuarios()
	{
        return $this->belongsTo('User');
    }
}
