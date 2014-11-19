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
		$estudiantes_con_encuestas = User::where("tiene_consumo_habitual", "=", 1)->get()->count();
		if($estudiantes_con_encuestas == 5 || $estudiantes_con_encuestas == 20 || $estudiantes_con_encuestas == 100){
			Setting::consumoAlimentosListo($estudiantes_con_encuestas);
		}

		if($estudiantes_con_encuestas == 392){
			if(Setting::consumoAlimentosListo($estudiantes_con_encuestas)){
				//No haga nada
			}
			else{
				Setting::enviaMailConsumoAlimentos();
				$setting = new Setting;
				$setting->nombre = "Mail consumo alimentos";
				$setting->valor = "enviado";
				$setting->save();
			}
			return true;
		}elseif($estudiantes_con_encuestas > 392){
			return true;
		}else{
			return false;
		}
	}

}