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
		if(User::where("tiene_consumo_habitual", "=", 1)->get()->count() == 392){
			if(Setting::consumoAlimentosListo()){
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
		}elseif(User::where("tiene_consumo_habitual", "=", 1)->get()->count() > 392){
			return true;
		}else{
			return false;
		}
	}

}