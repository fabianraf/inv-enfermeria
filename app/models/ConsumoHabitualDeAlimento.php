<?php

class ConsumoHabitualDeAlimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'consumo_habitual_de_alimentos';
	public static $rules = array();


	public function preparacionConsumoHabitualDeAlimentos()
	{
		return $this->hasMany('PreparacionConsumoHabitualDeAlimento')->orderBy("created_at", "DESC");
	}
	
}