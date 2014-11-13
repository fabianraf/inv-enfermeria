<?php

class AlimentosBaresController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $tipos_de_alimentos_bares = TipoDeAlimentoBares::orderBy('nombre')->get();
        $alimento_inicial_bares = TipoDeAlimentoBares::orderBy('nombre')->first();
        $id_inicial = $alimento_inicial_bares->id;
        return View::make('alimentosBares.main', array('tipos_de_alimentos_bares' => $tipos_de_alimentos_bares, 
        										'id_inicial' => $id_inicial));
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
		$validator = Validator::make($campos, AlimentoBares::$rules);
		if(isset($campos['alimento_bares_id'])){
			if ($validator->passes()) {
				$id = $campos['alimento_bares_id'];
				$alimento_bares = AlimentoBares::find($id);
				$alimento_bares->usuario_id = Auth::user()->id;
				$alimento_bares->porciones = ($campos['porciones']!='' ? $campos['porciones'] : 'n/a');
				$alimento_bares->gramos = ($campos['gramos']!='' ? $campos['gramos'] : '0');			
				$alimento_bares->humedad = ($campos['humedad']!='' ? $campos['humedad'] : '0');			
				$alimento_bares->calorias = ($campos['calorias']!='' ? $campos['calorias'] : '0');			
				$alimento_bares->proteinas = ($campos['proteinas']!='' ? $campos['proteinas'] : '0');			
				$alimento_bares->hidratos_de_c = ($campos['hidratos_de_c']!='' ? $campos['hidratos_de_c'] : '0');			
				$alimento_bares->fibra_dietaria = ($campos['fibra_dietaria']!='' ? $campos['fibra_dietaria'] : '0');			
				$alimento_bares->lipidos = ($campos['lipidos']!='' ? $campos['lipidos'] : '0');			
				$alimento_bares->acidos_grasos_saturados = ($campos['acidos_grasos_saturados']!='' ? $campos['acidos_grasos_saturados'] : '0');			
				$alimento_bares->acidos_grasos_monoinsat = ($campos['acidos_grasos_monoinsat']!='' ? $campos['acidos_grasos_monoinsat'] : '0');			
				$alimento_bares->acidos_grasos_polinsat = ($campos['acidos_grasos_polinsat']!='' ? $campos['acidos_grasos_polinsat'] : '0');			
				$alimento_bares->colesterol = ($campos['colesterol']!='' ? $campos['colesterol'] : '0');			
				$alimento_bares->n6 = ($campos['n6']!='' ? $campos['n6'] : '0');			
				$alimento_bares->n3 = ($campos['n3']!='' ? $campos['n3'] : '0');			
				$alimento_bares->caroteno = ($campos['caroteno']!='' ? $campos['caroteno'] : '0');			
				$alimento_bares->retinol_re = ($campos['retinol_re']!='' ? $campos['retinol_re'] : '0');			
				$alimento_bares->vit_a_total_re = ($campos['vit_a_total_re']!='' ? $campos['vit_a_total_re'] : '0');			
				$alimento_bares->vit_b1 = ($campos['vit_b1']!='' ? $campos['vit_b1'] : '0');			
				$alimento_bares->vit_b2 = ($campos['vit_b2']!='' ? $campos['vit_b2'] : '0');			
				$alimento_bares->niacina = ($campos['niacina']!='' ? $campos['niacina'] : '0');			
				$alimento_bares->vit_b6 = ($campos['vit_b6']!='' ? $campos['vit_b6'] : '0');			
				$alimento_bares->vit_b12 = ($campos['vit_b12']!='' ? $campos['vit_b12'] : '0');			
				$alimento_bares->folatos = ($campos['folatos']!='' ? $campos['folatos'] : '0');			
				$alimento_bares->acido_pantogenico = ($campos['acido_pantogenico']!='' ? $campos['acido_pantogenico'] : '0');			
				$alimento_bares->vit_c = ($campos['vit_c']!='' ? $campos['vit_c'] : '0');			
				$alimento_bares->vit_e = ($campos['vit_e']!='' ? $campos['vit_e'] : '0');			
				$alimento_bares->calcio = ($campos['calcio']!='' ? $campos['calcio'] : '0');			
				$alimento_bares->cobre = ($campos['cobre']!='' ? $campos['cobre'] : '0');
				$alimento_bares->hierro = ($campos['hierro']!='' ? $campos['hierro'] : '0');			
				$alimento_bares->magnesio = ($campos['magnesio']!='' ? $campos['magnesio'] : '0');			
				$alimento_bares->fosforo = ($campos['fosforo']!='' ? $campos['fosforo'] : '0');			
				$alimento_bares->potasio = ($campos['potasio']!='' ? $campos['potasio'] : '0');			
				$alimento_bares->selenio = ($campos['selenio']!='' ? $campos['selenio'] : '0');			
				$alimento_bares->sodio = ($campos['sodio']!='' ? $campos['sodio'] : '0');			
				$alimento_bares->zinc = ($campos['zinc']!='' ? $campos['zinc'] : '0');			
				$alimento_bares->cenizas = ($campos['cenizas']!='' ? $campos['cenizas'] : '0');			
				$alimento_bares->acido_folico = ($campos['acido_folico']!='' ? $campos['acido_folico'] : '0');
				$alimento_bares->fraccion_comestible = ($campos['fraccion_comestible']!='' ? $campos['fraccion_comestible'] : '0');
				$alimento_bares->carbohidratos_disponibles = ($campos['carbohidratos_disponibles']!='' ? $campos['carbohidratos_disponibles'] : '0');
				$alimento_bares->fibra_cruda = ($campos['fibra_cruda']!='' ? $campos['fibra_cruda'] : '0');
				$alimento_bares->save();
				$tipo_de_alimento_bares_id = $alimento_bares->tipo_de_alimento_bares_id;
				$tipo_de_alimento_bares = TipoDeAlimentoBares::find($tipo_de_alimento_bares_id);
				$alimentos_bares = AlimentoBares::where('tipo_de_alimento_bares_id', '=', $tipo_de_alimento_bares_id)        					
	                            ->orderBy('nombre')->get();
	            $tipos_de_alimentos_bares = TipoDeAlimentoBares::orderBy('nombre')->get(); 
	        	$alimento_bares_inicial = TipoDeAlimentoBares::orderBy('nombre','ASC')->first();
		        $id_inicial = $alimento_bares_inicial->id;
		        return View::make('alimentosBares.view', array('alimento_bares' => $alimento_bares))->with('message', 'La información ha sido guardada correctamente');
	        } else {
		    return Redirect::back()->withInput()->withErrors($validator->messages());	   
		    }     	        
		}
		if(isset($campos['tipo_de_alimento_bares_id'])){
			$tipo_de_alimento_bares_id = $campos['tipo_de_alimento_bares_id'];
			$alimento_bares = new AlimentoBares();
			$alimento_bares->nombre = strtoupper($campos['nombre']);
			$alimento_bares->tipo_de_alimento_bares_id = $tipo_de_alimento_bares_id;
			$alimento_bares->save();
			$tipo_de_alimento_bares = TipoDeAlimentoBares::find($tipo_de_alimento_bares_id);
			$alimentos_bares = AlimentoBares::where('tipo_de_alimento_bares_id', '=', $tipo_de_alimento_bares_id)        					
                            ->orderBy('nombre')->get();
            $tipos_de_alimentos_bares = TipoDeAlimentoBares::orderBy('nombre')->get(); 
	        $alimento_bares_inicial = TipoDeAlimentoBares::orderBy('nombre','ASC')->first();
		    $id_inicial = $alimento_bares_inicial->id;
		    return View::make('alimentosBares.main', array('tipos_de_alimentos_bares' => $tipos_de_alimentos_bares, 
		        										'id_inicial' => $id_inicial))->with('message', 'La información ha sido guardada correctamente');
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
        $tipo_de_alimento_bares = TipoDeAlimentoBares::find($id);        
        $alimentos_bares = AlimentoBares::where('tipo_de_alimento_bares_id', '=', $id)        					
                            ->orderBy('nombre')->get();                            
        return View::make('alimentosBares.alimentosBares', array('alimentos_bares' => $alimentos_bares, 'tipo_de_alimento_bares' => $tipo_de_alimento_bares));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $alimento_bares = AlimentoBares::find($id);
        return View::make('alimentosBares.view', array('alimento_bares' => $alimento_bares));
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

	public function delete($id)
	{
		$alimento_bares = AlimentoBares::find($id);
		$alimento_bares->delete();
        return Redirect::back();
	}



	public function obtener_alimentos()
	{
		return Response::json(DB::table('alimentos_bares')->select('nombre')->get());
	}


}