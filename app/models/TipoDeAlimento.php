<?php

class TipoDeAlimento extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'tipo_de_alimentos';
	public static $rules = array(
	    'nombre'=>'required|min:2'
	    );
	
	public function alimentos()
		    {
	        return $this->hasMany('Alimento')->orderBy("created_at", "DESC");
		    }
	public static function get_total_alimentos(){
		$count = 0;
		foreach(TipoDeAlimento::all() as $tipo_de_alimento){
			$count += $tipo_de_alimento->alimentos->count();
		}
		return $count;
	}
}
