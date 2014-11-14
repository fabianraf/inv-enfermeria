@extends('layouts.default')
    
@section('content')

{{ Form::open(array('url' => 'bioquimica')) }}

{{ HTML::style('css/smoothness-jquery-ui.css') }}


<div class="col-lg-12">

@if(isset($estudiante) && $estudiante->bioquimica)
<div class="pull-right">
    <a href="{{{ URL::to('bioquimica/datos/'.$estudiante->id) }}}"><input type="button" value="EDITAR INFORMACION" class="btn btn-primary"></button></a>    
</div><br>
@endif

  <h2>Gestión de pruebas bioquímicas</h2>
  <hr>
  </br>

  <!-- Success-Messages -->
  @if(isset($message))
        <div class="alert alert-danger">           
        {{$message}}
        </div>
    @endif

    @if(isset($estudiante) && !$estudiante->bioquimica)
    <div class="alert alert-warning">          
      El estudiante no tiene datos bioquímicos<br>
      <a href="{{{ URL::to('bioquimica/datos/'.$estudiante->id) }}}">Ingresar datos</a>
    </div>
  @endif

  @if($errors->any())
  <div class="alert alert-danger alert-block">
    <ul>
      {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
  </div>
  @endif
 
  <div class="row">    
    <div class="col-sm-6">
      {{ Form::text('nombre_alumno','', array('class' => 'form-control', 'placeholder' => 'Buscar estudiante', 'id' => 'nombre_alumno', 'onkeyup' => 'cUpper(this)' )); }}      
      {{ Form::hidden('alumno_id', Input::old('alumno_id'),array('id'=>'alumno_id'))}}
    </div>
    <button type="submit" class="btn btn-success" id="confirm"><i class='glyphicon glyphicon-search'></i></button>        
  </div>
  </br>
  @if(isset($estudiante))
    <div class="col-md-4 col-lg-9" >
      <h4><i><u>Datos personales</u></i></h4>
        <ul type = square>
          <p><li><strong>Email: </strong>{{ $estudiante->email }}</p>
          <p><li><strong>Nombre: </strong>{{ $estudiante->nombre.' '. $estudiante->apellido}}</p>
          <p><li><strong>Edad: </strong>{{ $estudiante->getEdad()}} años</p>
        </ul>
    </div>
    @if($estudiante->bioquimica)
      <div class="row">
       <div class="col-sm-5">     
          <h4><i><u>Biometría hemática</u></i></h4>
          <ul type = square>
            <p><li><strong>WBC (K/uL): </strong>{{ $estudiante->bioquimica()->first()->wbc }}</p>
            <p><li><strong>Neutrofilos (%): </strong>{{ $estudiante->bioquimica()->first()->neutrofilos }}</p>
            <p><li><strong>Linfocitos (%): </strong>{{ $estudiante->bioquimica()->first()->linfocitos }}</p>
            <p><li><strong>Monocitos (%): </strong>{{ $estudiante->bioquimica()->first()->monocitos }}</p>
            <p><li><strong>Eosinofilos (%): </strong>{{ $estudiante->bioquimica()->first()->eosinofilos }}</p>
            <p><li><strong>Basofilos (%): </strong>{{ $estudiante->bioquimica()->first()->basofilos }}</p>
            <p><li><strong>Linfocitos atípicos (%): </strong>{{ $estudiante->bioquimica()->first()->linfocitos_atipicos }}</p>
            <p><li><strong>Células grandes inmaduras (%): </strong>{{ $estudiante->bioquimica()->first()->celulas_grandes_inmaduras }}</p>
            <p><li><strong>RBC (M/uL): </strong>{{ $estudiante->bioquimica()->first()->rbc }}</p>
            <p><li><strong>HGB (g/dL): </strong>{{ $estudiante->bioquimica()->first()->hgb }}</p>
            <p><li><strong>HCT (%): </strong>{{ $estudiante->bioquimica()->first()->hct }}</p>
            <p><li><strong>RDW (%): </strong>{{ $estudiante->bioquimica()->first()->rdw }}</p>
            <p><li><strong>PLT (K/uL): </strong>{{ $estudiante->bioquimica()->first()->plt }}</p>
            <p><li><strong>MCH (pg): </strong>{{ $estudiante->bioquimica()->first()->mch }}</p>
            <p><li><strong>MCHC (g/dL): </strong>{{ $estudiante->bioquimica()->first()->mchc }}</p>
            <p><li><strong>MCV: </strong>{{ $estudiante->bioquimica()->first()->mcv }}</p>
          </ul><br>        
        </div>
        <div class="col-sm-6"> 
          <h4><i><u>Química</u></i></h4>
          <ul type = square>
            <p><li><strong>Colesterol: </strong>{{ $estudiante->bioquimica()->first()->colesterol }}</p>
            <p><li><strong>HDL Colesterol: </strong>{{ $estudiante->bioquimica()->first()->hdl_colesterol }}</p>
            <p><li><strong>Triglicéridos: </strong>{{ $estudiante->bioquimica()->first()->trigliceridos }}</p>
            <p><li><strong>Glucosa ayunas: </strong>{{ $estudiante->bioquimica()->first()->glucosa_ayunas }}</p>
            <p><li><strong>LDL Colesterol: </strong>{{ $estudiante->bioquimica()->first()->ldl_colesterol }}</p>
          </ul>
          <h4><i><u>Inmunología</u></i></h4>
          <ul type = square>
            <p><li><strong>HBSAG: </strong>{{ $estudiante->bioquimica()->first()->hbsag }}</p>
          </ul>
        </div>
      </div>l           
    @endif
  @endif
</div>
{{ Form::close() }}
@stop 