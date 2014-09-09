<?php

class PreparacionConsumoHabitualDeAlimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'preparacion_consumo_habitual_de_alimentos';
	public static $rules = array();
	
	public function ingredientesPreparacionConsumoHabitualDeAlimento()
	{
		return $this->hasMany('IngredientesPreparacionConsumoHabitualDeAlimento')->orderBy("created_at", "DESC");
	}

	public function consumoHabitualDeAlimento()
	    {
        return $this->belongsTo('ConsumoHabitualDeAlimento');
	    }
	
}