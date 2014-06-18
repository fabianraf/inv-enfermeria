<?php

class Antropometrias extends Eloquent {
	protected $guarded = array();
	protected $table = 'antropometrias';
	public static $rules = array();
	protected $fillable = array('usuario_id', 'peso', 'talla', 'imc','circunferencia_cintura',
				'circunferencia_cadera','indice_cintura_cadera','circunferencia_media_brazo',
				'porcentaje_cmb','pliegue_bicipital','pliegue_tricipital','porcentaje_pt',
				'pliegue_subescapular','pliegue_suprailiaco');

	public function usuarios()
	{
        return $this->belongsTo('User');
    }
}
