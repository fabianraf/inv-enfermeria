<?php

class ConsumoHabitualDeAlimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'consumo_habitual_de_alimentos';
	public static $rules = array();


	public function preparacionConsumoHabitualDeAlimentos()
	{
		return $this->hasMany('PreparacionConsumoHabitualDeAlimento')->orderBy("created_at", "DESC");
	}
	
	public static function encuestasConsumoHabitualCompleto()
	{
		//Son 1960 (5 x 392 encuestas) porque hay 5 tipos de encuestas: desayuno, media manana, almuerzo, media tarde, merienda 
		if(ConsumoHabitualDeAlimento::all()->count() == 1960){
			// if(Settings::mail_no_enviado())
				// manda_mail();
			return true;
		}elseif(ConsumoHabitualDeAlimento::all()->count() > 1960){
			return true;
		}else{
			return false;
		}
	}

}