<?php

class TipoDeAlimentoBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'tipo_de_alimentos_bares';
	public static $rules = array(
	    'nombre'=>'required|min:2'
	    );
	
	public function alimentosBares()
		    {
	        return $this->hasMany('AlimentoBares')->orderBy("created_at", "DESC");
		    }
	public static function get_total_alimentos_bares(){
		$count = 0;
		foreach(TipoDeAlimentoBares::all() as $tipo_de_alimento_bares){
			$count += $tipo_de_alimento_bares->alimentosBares->count();
		}
		return $count;
	}
}
