<?php

class AlimentoBares extends Eloquent {
	protected $guarded = array('id');
	protected $table = 'alimentos_bares';
	public static $rules = array(
	    'gramos'=>'numeric',
	    'humedad'=>'numeric',
	    'calorias'=>'numeric',
	    'proteinas'=>'numeric',
	    'hidratos_de_c'=>'numeric',
	    'fibra_dietaria'=>'numeric',
	    'lipidos'=>'numeric',
	    'acidos_grasos_saturados'=>'numeric',
	    'acidos_grasos_monoinsat'=>'numeric',
	    'acidos_grasos_polinsat'=>'numeric',
	    'colesterol'=>'numeric',
	    'n6'=>'numeric',
	    'n3'=>'numeric',
	    'caroteno'=>'numeric',
	    'retinol_re'=>'numeric',
	    'vit_a_total_re'=>'numeric',
	    'vit_b1'=>'numeric',
	    'vit_b2'=>'numeric',
	    'niacina'=>'numeric',
	    'vit_b6'=>'numeric',
	    'vit_b12'=>'numeric',
	    'folatos'=>'numeric',   
	    'acido_pantogenico'=>'numeric',
	    'vit_c'=>'numeric',
	    'vit_e'=>'numeric',
	    'calcio'=>'numeric',
	    'cobre'=>'numeric',
	    'hierro'=>'numeric',
	    'magnesio'=>'numeric',
	    'fosforo'=>'numeric',
	    'potasio'=>'numeric',
	    'selenio'=>'numeric',
	    'sodio'=>'numeric',
	    'zinc'=>'numeric',
	    'cenizas'=>'numeric',
	    'acido_folico'=>'numeric',
	    'fraccion_comestible'=>'numeric',
	    'carbohidratos_disponibles'=>'numeric',
	    'fibra_cruda'=>'numeric'
	    );
	
	public function tipoDeAlimentoBares()
	    {
        return $this->belongsTo('TipoDeAlimentoBares');
	    }
	
}
