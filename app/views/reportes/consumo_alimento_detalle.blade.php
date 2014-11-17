@extends('layouts.default')
    
@section('content')

{{ HTML::style('css/smoothness-jquery-ui.css') }}


<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_detalle"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
    </div><br>
  @endif
  @if($estudiante->encuestaAlimentosUniversidad)
    <h2>Resultados e interpretación - Frecuencia de consumo de alimentos en Universidad y alrededores</h2>
    <hr>
    </br>
    <div class="col-md-4 col-lg-9" >
      <h4><i><u>Datos personales</u></i></h4>
      <ul type = square>
        <p><li><strong>Email: </strong>{{ $estudiante->email }}</p>
        <p><li><strong>Nombre: </strong>{{ $estudiante->nombre.' '. $estudiante->apellido}}</p>
        <p><li><strong>Edad: </strong>{{ $estudiante->getEdad()}} años</p>
        <p><li><strong>Total Calorias: </strong>{{ $estudiante->getTotalCalorias()}}</p>
      </ul>
    </div>

    <div class="col-md-4 col-lg-9" >
      <h4><i><u>Nutrientes</u></i></h4>
      <ul type = square>
        <p><li><strong>Humedad: </strong>{{  $estudiante->getTotalHumedad() }}</p>
        <p><li><strong>Calorías: </strong>{{ $estudiante->getTotalCalorias() }}</p>
        <p><li><strong>Proteínas: </strong>{{ $estudiante->getTotalProteinas() }}</p>
        <p><li><strong>Hidratos de C: </strong>{{ $estudiante->getTotalHidratosDeC() }}</p>
        <p><li><strong>Fibra dietaria: </strong>{{ $estudiante->getTotalFibraDietaria() }}</p>
        <p><li><strong>Lípidos: </strong>{{ $estudiante->getTotalLipidos() }}</p>
        <p><li><strong>Acidos grasos saturados: </strong>{{ $estudiante->getTotalAcidosGrasosSaturados() }}</p>
        <p><li><strong>Acidos grasos monoinsat: </strong>{{ $estudiante->getTotalAcidosGrasosMonoinsat() }}</p>
        <p><li><strong>Colesterol: </strong>{{ $estudiante->getTotalColesterol() }}</p>
        <p><li><strong>N6: </strong>{{ $estudiante->getTotalN6() }}</p>
        <p><li><strong>N3: </strong>{{ $estudiante->getTotalN3() }}</p>
        <p><li><strong>Caroteno: </strong>{{ $estudiante->getTotalCaroteno() }}</p>
        <p><li><strong>Retinol re: </strong>{{ $estudiante->getTotalRetinolRe() }}</p>
        <p><li><strong>Vitamina A total re: </strong>{{ $estudiante->getTotalVitATotalRe() }}</p>
        <p><li><strong>Vitamina B1: </strong>{{ $estudiante->getTotalVitB1() }}</p>
        <p><li><strong>Vitamina B2: </strong>{{ $estudiante->getTotalVitB2() }}</p>
        <p><li><strong>Niacina: </strong>{{ $estudiante->getTotalNiacina() }}</p>
        <p><li><strong>Vitamina B6: </strong>{{ $estudiante->getTotalVitB6() }}</p>
        <p><li><strong>Vitamina B12: </strong>{{ $estudiante->getTotalVitB12() }}</p>
        <p><li><strong>Folatos: </strong>{{ $estudiante->getTotalFolatos() }}</p>
        <p><li><strong>Acido pantogénico: </strong>{{ $estudiante->getTotalAcidoPantogenico() }}</p>
        <p><li><strong>Vitamina C: </strong>{{ $estudiante->getTotalVitC() }}</p>
        <p><li><strong>Vitamina E: </strong>{{ $estudiante->getTotalVitE() }}</p>
        <p><li><strong>Calcio: </strong>{{ $estudiante->getTotalCalcio() }}</p>
        <p><li><strong>Cobre: </strong>{{ $estudiante->getTotalCobre() }}</p>
        <p><li><strong>Hierro: </strong>{{ $estudiante->getTotalHierro() }}</p>
        <p><li><strong>Magnesio: </strong>{{ $estudiante->getTotalMagnesio() }}</p>
        <p><li><strong>Fósforo: </strong>{{ $estudiante->getTotalFosforo() }}</p>
        <p><li><strong>Potasio: </strong>{{ $estudiante->getTotalPotasio() }}</p>
        <p><li><strong>Selenio: </strong>{{ $estudiante->getTotalSelenio() }}</p>
        <p><li><strong>Sodio: </strong>{{ $estudiante->getTotalSodio() }}</p>
        <p><li><strong>Zinc: </strong>{{ $estudiante->getTotalZinc() }}</p>
        <p><li><strong>Cenizas: </strong>{{ $estudiante->getTotalCenizas() }}</p>
        <p><li><strong>Acido fólico: </strong>{{ $estudiante->getTotalAcidoFolico() }}</p>
        <p><li><strong>Fracción comestible: </strong>{{ $estudiante->getTotalFraccionComestible() }}</p>
        <p><li><strong>Carbohidratos disponibles: </strong>{{ $estudiante->getTotalCarbohidratosDisponibles() }}</p>
        <p><li><strong>Fibra cruda: </strong>{{ $estudiante->getTotalFibraCruda() }}</p>
      </ul>
    </div>

    <!--
     <div class="row">
      <div class="col-sm-8">   
        <table class="table table-no-border ">
          <tr>              
            <td style="text-align:left"><b>Humedad</td>
            <td style="text-align:left"><b>Calorías</td>
            <td style="text-align:left"><b>Proteínas</td>
            <td style="text-align:left"><b>Hidratos de C</td>
            <td style="text-align:left"><b>Fibra dietaria</td>            
            <td style="text-align:left"><b>Lípidos</td>
            <td style="text-align:left"><b>Acidos grasos saturados</td>
            <td style="text-align:left"><b>Acidos grasos monoinsat</td>
            <td style="text-align:left"><b>Colesterol</td>
            <td style="text-align:left"><b>N6</td>
            <td style="text-align:left"><b>N3</td>
            <td style="text-align:left"><b>Caroteno</td>
            <td style="text-align:left"><b>Retinol re</td>
            <td style="text-align:left"><b>Vitamina A total re</td>
            <td style="text-align:left"><b>Vitamina B1</td>
            <td style="text-align:left"><b>Vitamina B2</td>
            <td style="text-align:left"><b>Niacina</td>
            <td style="text-align:left"><b>Vitamina B6</td>
            <td style="text-align:left"><b>Vitamina B12</td>
            <td style="text-align:left"><b>Folatos</td>
            <td style="text-align:left"><b>Acido pantogénico</td>
            <td style="text-align:left"><b>Vitamina C</td>
            <td style="text-align:left"><b>Vitamina E</td>
            <td style="text-align:left"><b>Calcio</td>
            <td style="text-align:left"><b>Cobre</td>
            <td style="text-align:left"><b>Hierro</td>
            <td style="text-align:left"><b>Magnesio</td>
            <td style="text-align:left"><b>Fósforo</td>
            <td style="text-align:left"><b>Potasio</td>
            <td style="text-align:left"><b>Selenio</td>
            <td style="text-align:left"><b>Sodio</td>
            <td style="text-align:left"><b>Zinc</td>
            <td style="text-align:left"><b>Cenizas</td>
            <td style="text-align:left"><b>Acido fólico</td>
            <td style="text-align:left"><b>Fracción comestible</td>
            <td style="text-align:left"><b>Carbohidratos disponibles</td>
            <td style="text-align:left"><b>Fibra cruda</td>
          </tr>         
          @foreach($estudiante->encuestaAlimentosUniversidad as $encuesta)       
          <tr>      
            <td style="text-align:left">{{ $encuesta->alimento->nombre }}</td>
            @if($encuesta->frecuencia==1)                
              <td style="text-align:left">7 dias</td>
            @elseif($encuesta->frecuencia==2)
              <td style="text-align:left">6 dias</td>
            @elseif($encuesta->frecuencia==3)                
              <td style="text-align:left">5 dias</td>
            @elseif($encuesta->frecuencia==4)                
              <td style="text-align:left">4 dias</td>
            @elseif($encuesta->frecuencia==5)                
              <td style="text-align:left">3 dias</td>
            @elseif($encuesta->frecuencia==6)                
              <td style="text-align:left">2 dias</td>
            @elseif($encuesta->frecuencia==7)                
              <td style="text-align:left">1 día</td>
            @elseif($encuesta->frecuencia==8)                
              <td style="text-align:left">Cada 15 días</td>
            @elseif($encuesta->frecuencia==9)                
              <td style="text-align:left">Nunca</td>
            @elseif($encuesta->frecuencia==10)                
              <td style="text-align:left">Desconoce</td>
            @endif          
            <td style="text-align:left">{{ $encuesta->num_porciones }}</td>        
          </tr>     
            @endforeach
        </table>
    @endif  
    </div>  
  </div>
-->
</div>
@stop



  