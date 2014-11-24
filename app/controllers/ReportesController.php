<?php

class ReportesController extends BaseController {

	function __construct() {
        $this->beforeFilter('auth');
    }	


	public function reporteAntropometria()
	{
		$users = User::has('antropometria')->orderBy('nombre')
                ->orderBy('apellido')->paginate(20);
		return View::make('reportes.antropometria', array('users' => $users));
	}

	public function reporteAntropometriaEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.antropometria_detalle', array('estudiante' => $estudiante));
	}

	public function reporteBioquimica()
	{
		$users = User::has('bioquimica')->orderBy('nombre')
                ->orderBy('apellido')->paginate(20);
		return View::make('reportes.bioquimica', array('users' => $users));
	}

	public function reporteBioquimicaEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.bioquimica_detalle', array('estudiante' => $estudiante));
	}

	public function reporteConsumoAlimentos()
	{
		$users = User::has('encuestaAlimentosUniversidad')->orderBy('nombre')
                ->orderBy('apellido')->get();
              //return View::make('reportes.en_construccion');
		 return View::make('reportes.consumo_alimento', array('users' => $users));
	}


	public function reporteConsumoAlimentosEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.consumo_alimento_detalle', array('estudiante' => $estudiante));
	}

	public function reporteConsumoAlimentosBares()
	{
		$users = User::has('encuestaAlimentosBares')->orderBy('nombre')
                ->orderBy('apellido')->get();
              //return View::make('reportes.en_construccion');
		return View::make('reportes.consumo_alimento_bares', array('users' => $users));
	}


	public function reporteConsumoAlimentosBaresEstudiante($id)
	{
		$estudiante = User::find($id);		
		return View::make('reportes.consumo_alimento_bares_detalle', array('estudiante' => $estudiante));
	}

	public function calcularDatosEncuestaAlimentosUniversidadEstudiante($id){
		$estudiante = User::find($id);
		$totalCalorias = 0;
		$totalHumedad = 0;
		$totalProteinas = 0;
		$totalHidratosDeC = 0;
		$totalFibraDietaria = 0;
		$totalLipidos = 0;
		$totalAcidosGrasosSaturados = 0;
		$totalAcidosGrasosMonoinsat = 0;
		$totalAcidosGrasosPolinsat = 0;
		$totalColesterol = 0;
		$totalN6 = 0;
		$totalN3 = 0;
		$totalCaroteno = 0;
		$totalRetinolRe = 0;
		$totalVitATotalRe = 0;
		$totalVitB1 = 0;
		$totalVitB2 = 0;
		$totalNiacina = 0;
		$totalVitB6 = 0;
		$totalVitB12 = 0;
		$totalFolatos = 0;
		$totalAcidoPantogenico = 0;
		$totalVitC = 0;
		$totalVitE = 0;
		$totalCalcio = 0;
		$totalCobre = 0;
		$totalHierro = 0;
		$totalMagnesio = 0;
		$totalFosforo = 0;
		$totalPotasio = 0;
		$totalSelenio = 0;
		$totalSodio = 0;
		$totalZinc = 0;
		$totalCenizas = 0;
		$totalAcidoFolico = 0;
		$totalFraccionComestible = 0;
		$totalCarbohidratosDisponibles = 0;
		$totalFibraCruda = 0;


		$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $estudiante->id)->get();
		foreach($encuestaAlimentosUniversidad as $encuesta)
		{
			$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
			$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;				
			$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
			$totalCalorias += ($pesoPorcion * $encuesta->alimento->calorias)/100;
			$totalHumedad += ($pesoPorcion * $encuesta->alimento->humedad)/100;
			$totalProteinas += ($pesoPorcion * $encuesta->alimento->proteinas)/100;
			$totalHidratosDeC += ($pesoPorcion * $encuesta->alimento->hidratos_de_c)/100;
			$totalFibraDietaria += ($pesoPorcion * $encuesta->alimento->fibra_dietaria)/100;
			$totalLipidos += ($pesoPorcion * $encuesta->alimento->lipidos)/100;
			$totalAcidosGrasosSaturados += ($pesoPorcion * $encuesta->alimento->acidos_grasos_saturados)/100;
			$totalAcidosGrasosMonoinsat += ($pesoPorcion * $encuesta->alimento->acidos_grasos_monoinsat)/100;
			$totalAcidosGrasosPolinsat += ($pesoPorcion * $encuesta->alimento->acidos_grasos_polinsat)/100;
			$totalColesterol += ($pesoPorcion * $encuesta->alimento->colesterol)/100;
			$totalN6 += ($pesoPorcion * $encuesta->alimento->n6)/100;
			$totalN3 += ($pesoPorcion * $encuesta->alimento->n3)/100;
			$totalCaroteno += ($pesoPorcion * $encuesta->alimento->caroteno)/100;
			$totalRetinolRe += ($pesoPorcion * $encuesta->alimento->retinol_re)/100;
			$totalVitATotalRe += ($pesoPorcion * $encuesta->alimento->vit_a_total_re)/100;
			$totalVitB1 += ($pesoPorcion * $encuesta->alimento->vit_b1)/100;
			$totalVitB2 += ($pesoPorcion * $encuesta->alimento->vit_b2)/100;
			$totalNiacina += ($pesoPorcion * $encuesta->alimento->niacina)/100;
			$totalVitB6 += ($pesoPorcion * $encuesta->alimento->vit_b6)/100;
			$totalVitB12 += ($pesoPorcion * $encuesta->alimento->vit_b12)/100;
			$totalFolatos += ($pesoPorcion * $encuesta->alimento->folatos)/100;
			$totalAcidoPantogenico += ($pesoPorcion * $encuesta->alimento->acido_pantogenico)/100;
			$totalVitC += ($pesoPorcion * $encuesta->alimento->vit_c)/100;
			$totalVitE += ($pesoPorcion * $encuesta->alimento->vit_e)/100;
			$totalCalcio += ($pesoPorcion * $encuesta->alimento->calcio)/100;
			$totalCobre += ($pesoPorcion * $encuesta->alimento->cobre)/100;
			$totalHierro += ($pesoPorcion * $encuesta->alimento->hierro)/100;
			$totalMagnesio += ($pesoPorcion * $encuesta->alimento->magnesio)/100;
			$totalFosforo += ($pesoPorcion * $encuesta->alimento->fosforo)/100;
			$totalPotasio += ($pesoPorcion * $encuesta->alimento->potasio)/100;
			$totalSelenio += ($pesoPorcion * $encuesta->alimento->selenio)/100;
			$totalSodio += ($pesoPorcion * $encuesta->alimento->sodio)/100;
			$totalZinc += ($pesoPorcion * $encuesta->alimento->zinc)/100;
			$totalCenizas += ($pesoPorcion * $encuesta->alimento->cenizas)/100;
			$totalAcidoFolico += ($pesoPorcion * $encuesta->alimento->acido_folico)/100;
			$totalFraccionComestible += ($pesoPorcion * $encuesta->alimento->fraccion_comestible)/100;
			$totalCarbohidratosDisponibles += ($pesoPorcion * $encuesta->alimento->carbohidratos_disponibles)/100;
			$totalFibraCruda += ($pesoPorcion * $encuesta->alimento->fibra_cruda)/100;
		}
		$resultadoEncuestasAlimentosUniversidad = ResultadoEncuestasAlimentosUniversidad::where("usuario_id", "=", $estudiante->id)->first();
		if(isset($resultadoEncuestasAlimentosUniversidad)){
			$resultadoEncuestasAlimentosUniversidad->delete();				
		}
		$resultadoEncuestasAlimentosUniversidad = new ResultadoEncuestasAlimentosUniversidad;
		$resultadoEncuestasAlimentosUniversidad->usuario_id = $estudiante->id;
		$resultadoEncuestasAlimentosUniversidad->calorias = $totalCalorias;
		$resultadoEncuestasAlimentosUniversidad->humedad = $totalHumedad;
		$resultadoEncuestasAlimentosUniversidad->proteinas = $totalProteinas;
		$resultadoEncuestasAlimentosUniversidad->hidratos_de_c = $totalHidratosDeC;
		$resultadoEncuestasAlimentosUniversidad->fibra_dietaria = $totalFibraDietaria;
		$resultadoEncuestasAlimentosUniversidad->lipidos = $totalLipidos;
		$resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados = $totalAcidosGrasosSaturados;
		$resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat = $totalAcidosGrasosMonoinsat;
		$resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat = $totalAcidosGrasosPolinsat;
		$resultadoEncuestasAlimentosUniversidad->colesterol = $totalColesterol;
		$resultadoEncuestasAlimentosUniversidad->n6 = $totalN6;
		$resultadoEncuestasAlimentosUniversidad->n3 = $totalN3;
		$resultadoEncuestasAlimentosUniversidad->caroteno = $totalCaroteno;
		$resultadoEncuestasAlimentosUniversidad->retinol_re = $totalRetinolRe;
		$resultadoEncuestasAlimentosUniversidad->vit_a_total_re = $totalVitATotalRe;
		$resultadoEncuestasAlimentosUniversidad->vit_b1 = $totalVitB1;
		$resultadoEncuestasAlimentosUniversidad->vit_b2 = $totalVitB2;
		$resultadoEncuestasAlimentosUniversidad->niacina = $totalNiacina;
		$resultadoEncuestasAlimentosUniversidad->vit_b6 = $totalVitB6;
		$resultadoEncuestasAlimentosUniversidad->vit_b12 = $totalVitB12;
		$resultadoEncuestasAlimentosUniversidad->folatos = $totalFolatos;
		$resultadoEncuestasAlimentosUniversidad->acido_pantogenico = $totalAcidoPantogenico;
		$resultadoEncuestasAlimentosUniversidad->vit_c = $totalVitC;
		$resultadoEncuestasAlimentosUniversidad->vit_e = $totalVitE;
		$resultadoEncuestasAlimentosUniversidad->calcio = $totalCalcio;
		$resultadoEncuestasAlimentosUniversidad->cobre = $totalCobre;
		$resultadoEncuestasAlimentosUniversidad->hierro = $totalHierro;
		$resultadoEncuestasAlimentosUniversidad->magnesio = $totalMagnesio;
		$resultadoEncuestasAlimentosUniversidad->fosforo = $totalFosforo;
		$resultadoEncuestasAlimentosUniversidad->potasio = $totalPotasio;
		$resultadoEncuestasAlimentosUniversidad->selenio = $totalSelenio;
		$resultadoEncuestasAlimentosUniversidad->sodio = $totalSodio;
		$resultadoEncuestasAlimentosUniversidad->zinc = $totalZinc;
		$resultadoEncuestasAlimentosUniversidad->cenizas = $totalCenizas;
		$resultadoEncuestasAlimentosUniversidad->acido_folico = $totalAcidoFolico;
		$resultadoEncuestasAlimentosUniversidad->fraccion_comestible = $totalFraccionComestible;
		$resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles = $totalCarbohidratosDisponibles;
		$resultadoEncuestasAlimentosUniversidad->fibra_cruda = $totalFibraCruda;
		$resultadoEncuestasAlimentosUniversidad->save();
		return Redirect::back();		
	}

	public function calcularDatosEncuestaAlimentosBaresEstudiante($id){
		$estudiante = User::find($id);
		$totalCalorias = 0;
		$totalHumedad = 0;
		$totalProteinas = 0;
		$totalHidratosDeC = 0;
		$totalFibraDietaria = 0;
		$totalLipidos = 0;
		$totalAcidosGrasosSaturados = 0;
		$totalAcidosGrasosMonoinsat = 0;
		$totalAcidosGrasosPolinsat = 0;
		$totalColesterol = 0;
		$totalN6 = 0;
		$totalN3 = 0;
		$totalCaroteno = 0;
		$totalRetinolRe = 0;
		$totalVitATotalRe = 0;
		$totalVitB1 = 0;
		$totalVitB2 = 0;
		$totalNiacina = 0;
		$totalVitB6 = 0;
		$totalVitB12 = 0;
		$totalFolatos = 0;
		$totalAcidoPantogenico = 0;
		$totalVitC = 0;
		$totalVitE = 0;
		$totalCalcio = 0;
		$totalCobre = 0;
		$totalHierro = 0;
		$totalMagnesio = 0;
		$totalFosforo = 0;
		$totalPotasio = 0;
		$totalSelenio = 0;
		$totalSodio = 0;
		$totalZinc = 0;
		$totalCenizas = 0;
		$totalAcidoFolico = 0;
		$totalFraccionComestible = 0;
		$totalCarbohidratosDisponibles = 0;
		$totalFibraCruda = 0;
		$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $estudiante->id)->get();
		foreach($encuestaAlimentosBares as $encuesta)
		{
			$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
			$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;				
			$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
			$totalCalorias += ($pesoPorcion * $encuesta->alimentoBares->calorias)/100;
			$totalHumedad += ($pesoPorcion * $encuesta->alimentoBares->humedad)/100;
			$totalProteinas += ($pesoPorcion * $encuesta->alimentoBares->proteinas)/100;
			$totalHidratosDeC += ($pesoPorcion * $encuesta->alimentoBares->hidratos_de_c)/100;
			$totalFibraDietaria += ($pesoPorcion * $encuesta->alimentoBares->fibra_dietaria)/100;
			$totalLipidos += ($pesoPorcion * $encuesta->alimentoBares->lipidos)/100;
			$totalAcidosGrasosSaturados += ($pesoPorcion * $encuesta->alimentoBares->acidos_grasos_saturados)/100;
			$totalAcidosGrasosMonoinsat += ($pesoPorcion * $encuesta->alimentoBares->acidos_grasos_monoinsat)/100;
			$totalAcidosGrasosPolinsat += ($pesoPorcion * $encuesta->alimentoBares->acidos_grasos_polinsat)/100;
			$totalColesterol += ($pesoPorcion * $encuesta->alimentoBares->colesterol)/100;
			$totalN6 += ($pesoPorcion * $encuesta->alimentoBares->n6)/100;
			$totalN3 += ($pesoPorcion * $encuesta->alimentoBares->n3)/100;
			$totalCaroteno += ($pesoPorcion * $encuesta->alimentoBares->caroteno)/100;
			$totalRetinolRe += ($pesoPorcion * $encuesta->alimentoBares->retinol_re)/100;
			$totalVitATotalRe += ($pesoPorcion * $encuesta->alimentoBares->vit_a_total_re)/100;
			$totalVitB1 += ($pesoPorcion * $encuesta->alimentoBares->vit_b1)/100;
			$totalVitB2 += ($pesoPorcion * $encuesta->alimentoBares->vit_b2)/100;
			$totalNiacina += ($pesoPorcion * $encuesta->alimentoBares->niacina)/100;
			$totalVitB6 += ($pesoPorcion * $encuesta->alimentoBares->vit_b6)/100;
			$totalVitB12 += ($pesoPorcion * $encuesta->alimentoBares->vit_b12)/100;
			$totalFolatos += ($pesoPorcion * $encuesta->alimentoBares->folatos)/100;
			$totalAcidoPantogenico += ($pesoPorcion * $encuesta->alimentoBares->acido_pantogenico)/100;
			$totalVitC += ($pesoPorcion * $encuesta->alimentoBares->vit_c)/100;
			$totalVitE += ($pesoPorcion * $encuesta->alimentoBares->vit_e)/100;
			$totalCalcio += ($pesoPorcion * $encuesta->alimentoBares->calcio)/100;
			$totalCobre += ($pesoPorcion * $encuesta->alimentoBares->cobre)/100;
			$totalHierro += ($pesoPorcion * $encuesta->alimentoBares->hierro)/100;
			$totalMagnesio += ($pesoPorcion * $encuesta->alimentoBares->magnesio)/100;
			$totalFosforo += ($pesoPorcion * $encuesta->alimentoBares->fosforo)/100;
			$totalPotasio += ($pesoPorcion * $encuesta->alimentoBares->potasio)/100;
			$totalSelenio += ($pesoPorcion * $encuesta->alimentoBares->selenio)/100;
			$totalSodio += ($pesoPorcion * $encuesta->alimentoBares->sodio)/100;
			$totalZinc += ($pesoPorcion * $encuesta->alimentoBares->zinc)/100;
			$totalCenizas += ($pesoPorcion * $encuesta->alimentoBares->cenizas)/100;
			$totalAcidoFolico += ($pesoPorcion * $encuesta->alimentoBares->acido_folico)/100;
			$totalFraccionComestible += ($pesoPorcion * $encuesta->alimentoBares->fraccion_comestible)/100;
			$totalCarbohidratosDisponibles += ($pesoPorcion * $encuesta->alimentoBares->carbohidratos_disponibles)/100;
			$totalFibraCruda += ($pesoPorcion * $encuesta->alimentoBares->fibra_cruda)/100;
		}
		$resultadoEncuestasAlimentosBares = ResultadoEncuestasAlimentosBares::where("usuario_id", "=", $estudiante->id)->first();
		if(isset($resultadoEncuestasAlimentosBares)){
			$resultadoEncuestasAlimentosBares->delete();				
		}
		$resultadoEncuestasAlimentosBares = new ResultadoEncuestasAlimentosBares;
		$resultadoEncuestasAlimentosBares->usuario_id = $estudiante->id;
		$resultadoEncuestasAlimentosBares->calorias = $totalCalorias;
		$resultadoEncuestasAlimentosBares->humedad = $totalHumedad;
		$resultadoEncuestasAlimentosBares->proteinas = $totalProteinas;
		$resultadoEncuestasAlimentosBares->hidratos_de_c = $totalHidratosDeC;
		$resultadoEncuestasAlimentosBares->fibra_dietaria = $totalFibraDietaria;
		$resultadoEncuestasAlimentosBares->lipidos = $totalLipidos;
		$resultadoEncuestasAlimentosBares->acidos_grasos_saturados = $totalAcidosGrasosSaturados;
		$resultadoEncuestasAlimentosBares->acidos_grasos_monoinsat = $totalAcidosGrasosMonoinsat;
		$resultadoEncuestasAlimentosBares->acidos_grasos_polinsat = $totalAcidosGrasosPolinsat;
		$resultadoEncuestasAlimentosBares->colesterol = $totalColesterol;
		$resultadoEncuestasAlimentosBares->n6 = $totalN6;
		$resultadoEncuestasAlimentosBares->n3 = $totalN3;
		$resultadoEncuestasAlimentosBares->caroteno = $totalCaroteno;
		$resultadoEncuestasAlimentosBares->retinol_re = $totalRetinolRe;
		$resultadoEncuestasAlimentosBares->vit_a_total_re = $totalVitATotalRe;
		$resultadoEncuestasAlimentosBares->vit_b1 = $totalVitB1;
		$resultadoEncuestasAlimentosBares->vit_b2 = $totalVitB2;
		$resultadoEncuestasAlimentosBares->niacina = $totalNiacina;
		$resultadoEncuestasAlimentosBares->vit_b6 = $totalVitB6;
		$resultadoEncuestasAlimentosBares->vit_b12 = $totalVitB12;
		$resultadoEncuestasAlimentosBares->folatos = $totalFolatos;
		$resultadoEncuestasAlimentosBares->acido_pantogenico = $totalAcidoPantogenico;
		$resultadoEncuestasAlimentosBares->vit_c = $totalVitC;
		$resultadoEncuestasAlimentosBares->vit_e = $totalVitE;
		$resultadoEncuestasAlimentosBares->calcio = $totalCalcio;
		$resultadoEncuestasAlimentosBares->cobre = $totalCobre;
		$resultadoEncuestasAlimentosBares->hierro = $totalHierro;
		$resultadoEncuestasAlimentosBares->magnesio = $totalMagnesio;
		$resultadoEncuestasAlimentosBares->fosforo = $totalFosforo;
		$resultadoEncuestasAlimentosBares->potasio = $totalPotasio;
		$resultadoEncuestasAlimentosBares->selenio = $totalSelenio;
		$resultadoEncuestasAlimentosBares->sodio = $totalSodio;
		$resultadoEncuestasAlimentosBares->zinc = $totalZinc;
		$resultadoEncuestasAlimentosBares->cenizas = $totalCenizas;
		$resultadoEncuestasAlimentosBares->acido_folico = $totalAcidoFolico;
		$resultadoEncuestasAlimentosBares->fraccion_comestible = $totalFraccionComestible;
		$resultadoEncuestasAlimentosBares->carbohidratos_disponibles = $totalCarbohidratosDisponibles;
		$resultadoEncuestasAlimentosBares->fibra_cruda = $totalFibraCruda;
		$resultadoEncuestasAlimentosBares->save();
		return Redirect::back();		
	}
}
