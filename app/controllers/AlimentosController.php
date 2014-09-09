<?php

class AlimentosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $tipos_de_alimentos = TipoDeAlimento::orderBy('nombre')->get();
        return View::make('alimentos.main', array('tipos_de_alimentos' => $tipos_de_alimentos));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$campos = Input::all();
		if(isset($campos['alimento_id'])){
			$id = $campos['alimento_id'];
			$alimento = Alimento::find($id);
			$alimento->porciones = ($campos['porciones']!='' ? $campos['porciones'] : 'n/a');
			$alimento->gramos = ($campos['gramos']!='' ? $campos['gramos'] : '0');			
			$alimento->humedad = ($campos['humedad']!='' ? $campos['humedad'] : '0');			
			$alimento->calorias = ($campos['calorias']!='' ? $campos['calorias'] : '0');			
			$alimento->proteinas = ($campos['proteinas']!='' ? $campos['proteinas'] : '0');			
			$alimento->hidratos_de_c = ($campos['hidratos_de_c']!='' ? $campos['hidratos_de_c'] : '0');			
			$alimento->fibra_dietaria = ($campos['fibra_dietaria']!='' ? $campos['fibra_dietaria'] : '0');			
			$alimento->lipidos = ($campos['lipidos']!='' ? $campos['lipidos'] : '0');			
			$alimento->acidos_grasos_saturados = ($campos['acidos_grasos_saturados']!='' ? $campos['acidos_grasos_saturados'] : '0');			
			$alimento->acidos_grasos_monoinsat = ($campos['acidos_grasos_monoinsat']!='' ? $campos['acidos_grasos_monoinsat'] : '0');			
			$alimento->acidos_grasos_polinsat = ($campos['acidos_grasos_polinsat']!='' ? $campos['acidos_grasos_polinsat'] : '0');			
			$alimento->colesterol = ($campos['colesterol']!='' ? $campos['colesterol'] : '0');			
			$alimento->n6 = ($campos['n6']!='' ? $campos['n6'] : '0');			
			$alimento->n3 = ($campos['n3']!='' ? $campos['n3'] : '0');			
			$alimento->caroteno = ($campos['caroteno']!='' ? $campos['caroteno'] : '0');			
			$alimento->retinol_re = ($campos['retinol_re']!='' ? $campos['retinol_re'] : '0');			
			$alimento->vit_a_total_re = ($campos['vit_a_total_re']!='' ? $campos['vit_a_total_re'] : '0');			
			$alimento->vit_b1 = ($campos['vit_b1']!='' ? $campos['vit_b1'] : '0');			
			$alimento->vit_b2 = ($campos['vit_b2']!='' ? $campos['vit_b2'] : '0');			
			$alimento->niacina = ($campos['niacina']!='' ? $campos['niacina'] : '0');			
			$alimento->vit_b6 = ($campos['vit_b6']!='' ? $campos['vit_b6'] : '0');			
			$alimento->vit_b12 = ($campos['vit_b12']!='' ? $campos['vit_b12'] : '0');			
			$alimento->folatos = ($campos['folatos']!='' ? $campos['folatos'] : '0');			
			$alimento->acido_pantogenico = ($campos['acido_pantogenico']!='' ? $campos['acido_pantogenico'] : '0');			
			$alimento->vit_c = ($campos['vit_c']!='' ? $campos['vit_c'] : '0');			
			$alimento->vit_e = ($campos['vit_e']!='' ? $campos['vit_e'] : '0');			
			$alimento->calcio = ($campos['calcio']!='' ? $campos['calcio'] : '0');			
			$alimento->cobre = ($campos['cobre']!='' ? $campos['cobre'] : '0');
			$alimento->hierro = ($campos['hierro']!='' ? $campos['hierro'] : '0');			
			$alimento->magnesio = ($campos['magnesio']!='' ? $campos['magnesio'] : '0');			
			$alimento->fosforo = ($campos['fosforo']!='' ? $campos['fosforo'] : '0');			
			$alimento->potasio = ($campos['potasio']!='' ? $campos['potasio'] : '0');			
			$alimento->selenio = ($campos['selenio']!='' ? $campos['selenio'] : '0');			
			$alimento->sodio = ($campos['sodio']!='' ? $campos['sodio'] : '0');			
			$alimento->zinc = ($campos['zinc']!='' ? $campos['zinc'] : '0');			
			$alimento->cenizas = ($campos['cenizas']!='' ? $campos['cenizas'] : '0');			
			$alimento->acido_folico = ($campos['acido_folico']!='' ? $campos['acido_folico'] : '0');
			$alimento->fraccion_comestible = ($campos['fraccion_comestible']!='' ? $campos['fraccion_comestible'] : '0');
			$alimento->carbohidratos_disponibles = ($campos['carbohidratos_disponibles']!='' ? $campos['carbohidratos_disponibles'] : '0');
			$alimento->fibra_cruda = ($campos['fibra_cruda']!='' ? $campos['fibra_cruda'] : '0');
			$alimento->save();
			$tipo_de_alimento_id = $alimento->tipo_de_alimento_id;
			$tipo_de_alimento = TipoDeAlimento::find($tipo_de_alimento_id);
			$alimentos = Alimento::where('tipo_de_alimento_id', '=', $tipo_de_alimento_id)        					
                            ->orderBy('nombre')->get(); 
        	return View::make('alimentos.alimentos', array('alimentos' => $alimentos, 'tipo_de_alimento' => $tipo_de_alimento));
		}
		if(isset($campos['tipo_de_alimento_id'])){
			$tipo_de_alimento_id = $campos['tipo_de_alimento_id'];
			$alimento = new Alimento();
			$alimento->nombre = strtoupper($campos['nombre']);
			$alimento->tipo_de_alimento_id = $tipo_de_alimento_id;
			$alimento->save();
			$tipo_de_alimento = TipoDeAlimento::find($tipo_de_alimento_id);
			$alimentos = Alimento::where('tipo_de_alimento_id', '=', $tipo_de_alimento_id)        					
                            ->orderBy('nombre')->get(); 
        	return View::make('alimentos.alimentos', array('alimentos' => $alimentos, 'tipo_de_alimento' => $tipo_de_alimento));
		}			
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $tipo_de_alimento = TipoDeAlimento::find($id);        
        $alimentos = Alimento::where('tipo_de_alimento_id', '=', $id)        					
                            ->orderBy('nombre')->get();                            
        return View::make('alimentos.alimentos', array('alimentos' => $alimentos, 'tipo_de_alimento' => $tipo_de_alimento));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $alimento = Alimento::find($id);
        return View::make('alimentos.view', array('alimento' => $alimento));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}



	public function obtener_alimentos()
	{
		return Response::json(DB::table('alimentos')->select('nombre')->get());
	}


}