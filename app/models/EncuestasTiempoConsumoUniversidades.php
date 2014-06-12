<?php

class EncuestasTiempoConsumoUniversidades extends Eloquent {
	protected $guarded = array();
	protected $table = 'encuestas_tiempo_consumo_universidades';
	public static $rules = array();

	public function tiempoComida()
	{
		return $this->belongsTo('TiemposComida');
	}
}
