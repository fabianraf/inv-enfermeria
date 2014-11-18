@extends('layouts.default')
    
@section('content')

<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_alimentos_bares"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
    </div><br>
  @endif
  @if($estudiante->encuestaAlimentosBares)
    <h2>Frecuencia de consumo de alimentos en los bares de la Universidad</h2>
    <hr>
    </br>
    <div class="col-md-4 col-lg-9" >
      <h4><i><u>Datos personales</u></i></h4>
      <ul type = square>
        <p><li><strong>Email: </strong>{{ $estudiante->email }}</p>
        <p><li><strong>Nombre: </strong>{{ $estudiante->nombre.' '. $estudiante->apellido}}</p>
        <p><li><strong>Edad: </strong>{{ $estudiante->getEdad()}} años</p>        
      </ul>
    </div>
     <div class="col-md-4 col-lg-9" >
      <h4><i><u>Nutrientes</u></i></h4>
      <ul type = square>
        <p><li><strong>Humedad: </strong>{{  round($estudiante->getTotalHumedad(2), 2) }}</p>
        <p><li><strong>Calorías: </strong>{{ round($estudiante->getTotalCalorias(2), 2) }}</p>
        <p><li><strong>Proteínas: </strong>{{ round($estudiante->getTotalProteinas(2),2) }}</p>
        <p><li><strong>Hidratos de C: </strong>{{ round($estudiante->getTotalHidratosDeC(2), 2) }}</p>
        <p><li><strong>Fibra dietaria: </strong>{{ round($estudiante->getTotalFibraDietaria(2), 2) }}</p>
        <p><li><strong>Lípidos: </strong>{{ round($estudiante->getTotalLipidos(2), 2) }}</p>
        <p><li><strong>Acidos grasos saturados: </strong>{{ round($estudiante->getTotalAcidosGrasosSaturados(2), 2) }}</p>
        <p><li><strong>Acidos grasos monoinsat: </strong>{{ round($estudiante->getTotalAcidosGrasosMonoinsat(2), 2) }}</p>
        <p><li><strong>Acidos grasos polinsat: </strong>{{ round($estudiante->getTotalAcidosGrasosPolinsat(2), 2) }}</p>
        <p><li><strong>Colesterol: </strong>{{ round($estudiante->getTotalColesterol(2), 2) }}</p>
        <p><li><strong>N6: </strong>{{ round($estudiante->getTotalN6(2), 2) }}</p>
        <p><li><strong>N3: </strong>{{ round($estudiante->getTotalN3(2), 2) }}</p>
        <p><li><strong>Caroteno: </strong>{{ round($estudiante->getTotalCaroteno(2), 2) }}</p>
        <p><li><strong>Retinol re: </strong>{{ round($estudiante->getTotalRetinolRe(2), 2) }}</p>
        <p><li><strong>Vitamina A total re: </strong>{{ round($estudiante->getTotalVitATotalRe(2), 2) }}</p>
        <p><li><strong>Vitamina B1: </strong>{{ round($estudiante->getTotalVitB1(2), 2) }}</p>
        <p><li><strong>Vitamina B2: </strong>{{ round($estudiante->getTotalVitB2(2), 2) }}</p>
        <p><li><strong>Niacina: </strong>{{ round($estudiante->getTotalNiacina(2), 2) }}</p>
        <p><li><strong>Vitamina B6: </strong>{{ round($estudiante->getTotalVitB6(2), 2) }}</p>
        <p><li><strong>Vitamina B12: </strong>{{ round($estudiante->getTotalVitB12(2), 2) }}</p>
        <p><li><strong>Folatos: </strong>{{ round($estudiante->getTotalFolatos(2), 2) }}</p>
        <p><li><strong>Acido pantogénico: </strong>{{ round($estudiante->getTotalAcidoPantogenico(2), 2) }}</p>
        <p><li><strong>Vitamina C: </strong>{{ round($estudiante->getTotalVitC(2), 2) }}</p>
        <p><li><strong>Vitamina E: </strong>{{ round($estudiante->getTotalVitE(2), 2) }}</p>
        <p><li><strong>Calcio: </strong>{{ round($estudiante->getTotalCalcio(2), 2) }}</p>
        <p><li><strong>Cobre: </strong>{{ round($estudiante->getTotalCobre(2), 2) }}</p>
        <p><li><strong>Hierro: </strong>{{ round($estudiante->getTotalHierro(2), 2) }}</p>
        <p><li><strong>Magnesio: </strong>{{ round($estudiante->getTotalMagnesio(2), 2) }}</p>
        <p><li><strong>Fósforo: </strong>{{ round($estudiante->getTotalFosforo(2), 2) }}</p>
        <p><li><strong>Potasio: </strong>{{ round($estudiante->getTotalPotasio(2), 2) }}</p>
        <p><li><strong>Selenio: </strong>{{ round($estudiante->getTotalSelenio(2), 2) }}</p>
        <p><li><strong>Sodio: </strong>{{ round($estudiante->getTotalSodio(2), 2) }}</p>
        <p><li><strong>Zinc: </strong>{{ round($estudiante->getTotalZinc(2), 2) }}</p>
        <p><li><strong>Cenizas: </strong>{{ round($estudiante->getTotalCenizas(2), 2) }}</p>
        <p><li><strong>Acido fólico: </strong>{{ round($estudiante->getTotalAcidoFolico(2), 2) }}</p>
        <p><li><strong>Fracción comestible: </strong>{{ round($estudiante->getTotalFraccionComestible(2), 2) }}</p>
        <p><li><strong>Carbohidratos disponibles: </strong>{{ round($estudiante->getTotalCarbohidratosDisponibles(2), 2) }}</p>
        <p><li><strong>Fibra cruda: </strong>{{ round($estudiante->getTotalFibraCruda(2), 2) }}</p>
      </ul>
    </div>
</div>
@endif
@stop



  