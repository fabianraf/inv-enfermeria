<?php

class EncuestaAlimentosBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'encuestas_alimentos_bares';
	public static $rules = array();
	
	public function usuario()
	    {
        return $this->belongsTo('Usuario');
	    }
			
	public function alimentoBares()
	    {
        return $this->belongsTo('AlimentoBares');
	    }

	public static function getPromedioEstudiantesPorAlimento($alimento_id, $frecuencia){
		$numero_de_estudiantes = DB::table('encuestas_alimentos_bares')
											->join("usuarios", "encuestas_alimentos_bares.usuario_id", '=', 'usuarios.id')
											->where("alimento_bares_id", "=", $alimento_id)
											->where("usuarios.bioquimica", "=", "t")
											->count();
		$numero_de_estudiantes_con_frecuencia_seleccionada = DB::table('encuestas_alimentos_bares')
											->join("usuarios", "encuestas_alimentos_bares.usuario_id", '=', 'usuarios.id')
											->where("alimento_bares_id", "=", $alimento_id)
											->where("usuarios.bioquimica", "=", "t")
											->where("frecuencia", "=", $frecuencia)
											->count();							
		return round(($numero_de_estudiantes_con_frecuencia_seleccionada/$numero_de_estudiantes) * 100, 2);
	}

	public static function getPromedioFrecuenciaPorAlimento($alimento_id){
		$numero_de_estudiantes = DB::table('encuestas_alimentos_bares')
											->join("usuarios", "encuestas_alimentos_bares.usuario_id", '=', 'usuarios.id')
											->where("alimento_bares_id", "=", $alimento_id)
											->where("usuarios.bioquimica", "=", "t")
											->count();
		$suma = DB::table('encuestas_alimentos_bares')
											->join("usuarios", "encuestas_alimentos_bares.usuario_id", '=', 'usuarios.id')
											->where("alimento_bares_id", "=", $alimento_id)
											->where("usuarios.bioquimica", "=", "t")
											->sum('num_porciones');
		return round(($suma/$numero_de_estudiantes), 2);
	}
	
}