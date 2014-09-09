<?php

class IngredientesPreparacionConsumoHabitualDeAlimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'ingredientes_preparacion_consumo_habitual_de_alimentos';
	public static $rules = array();
	
	public function preparacionConsumoHabitualDeAlimento()
	    {
        return $this->belongsTo('PreparacionConsumoHabitualDeAlimento');
	    }
	
}