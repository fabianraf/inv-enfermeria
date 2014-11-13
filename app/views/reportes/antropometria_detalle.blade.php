@extends('layouts.default')
    
@section('content')

{{ HTML::style('css/smoothness-jquery-ui.css') }}


<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/antropometria"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
    </div><br>
  @endif
  @if($estudiante->antropometria)
    <h2>Resultados e interpretación antropométricos</h2>
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
     <div class="row">
      <div class="col-sm-5">   
        <h4><i><u>Datos antropométricos</u></i></h4>
        <ul type = square>
          <p><li><strong>Peso (kg): </strong>{{ $estudiante->antropometria()->first()->peso }}</p>
          <p><li><strong>Talla (m): </strong>{{ $estudiante->antropometria()->first()->talla }}</p>
          <p><li><strong>Circunferencia cintura (cm): </strong>{{ $estudiante->antropometria()->first()->circunferencia_cintura }}</p>
          <p><li><strong>Circunferencia cadera (cm): </strong>{{ $estudiante->antropometria()->first()->circunferencia_cadera }}</p>
          <p><li><strong>Circunferencia media del brazo – CMB (cm): </strong>{{ $estudiante->antropometria()->first()->circunferencia_media_brazo }}</p>
          <p><li><strong>Pliegue bicipital (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_bicipital }}</p>
          <p><li><strong>Pliegue tricipital - PT (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_tricipital }}</p>
          <p><li><strong>Pliegue subescapular (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_subescapular }}</p>
          <p><li><strong>Pliegue suprailíaco (mm): </strong>{{ $estudiante->antropometria()->first()->pliegue_suprailiaco }}</p>
        </ul><br>        
      </div>
      <div class="col-sm-6">        
        <h4><i><u>Resultados e interpretación</u></i></h4>
        <ul type = square>
          <p><li><strong>Indice masa corporal (IMC): </strong>{{ $estudiante->antropometria()->first()->imc }} - {{ $estudiante->antropometria()->first()->interpretacion_imc }}</p>
          <p><li><strong>Indice cintura-cadera: </strong>{{ $estudiante->antropometria()->first()->indice_cintura_cadera }} - {{ $estudiante->antropometria()->first()->interpretacion_indice_cintura_cadera }}</p>
          <p><li><strong>Porcentaje circunferencia media del brazo (% CMB): </strong>{{ $estudiante->antropometria()->first()->porcentaje_cmb }} - {{ $estudiante->antropometria()->first()->interpretacion_cmb }}</p>
          <p><li><strong>Porcentaje pliegue tricipital (%): </strong>{{ $estudiante->antropometria()->first()->porcentaje_pt }} - {{ $estudiante->antropometria()->first()->interpretacion_pliegue_tricipital }}</p>
        </ul>
      </div>   
    </div>
    @else
        <div class="row">
          <div class="col-sm-5"> 
            <div class="alert alert-warning">          
            No existe información de pruebas antropométricas
            </div>  
          </div>  
        </div>
  @endif
    
</div>

@stop



  