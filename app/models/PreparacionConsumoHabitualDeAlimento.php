<?php

class PreparacionConsumoHabitualDeAlimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'preparacion_consumo_habitual_de_alimentos';
	public static $rules = array();
	
	public function ingredientesPreparacionConsumoHabitualDeAlimento()
	{
		return $this->hasMany('IngredientesPreparacionConsumoHabitualDeAlimento','preparacion_consumo_habitual_de_alimentos_id')->orderBy("created_at", "DESC");
	}

	public function consumoHabitualDeAlimento()
	{
        return $this->belongsTo('ConsumoHabitualDeAlimento','consumo_habitual_de_alimentos_id');
	}
	
	public function delete(){
		 $this->ingredientesPreparacionConsumoHabitualDeAlimento()->delete();	 
		 return parent::delete();
	}
}