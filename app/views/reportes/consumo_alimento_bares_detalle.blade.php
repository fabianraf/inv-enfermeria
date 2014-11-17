@extends('layouts.default')
    
@section('content')

{{ HTML::style('css/smoothness-jquery-ui.css') }}


<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_detalle"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
    </div><br>
  @endif
  @if($estudiante->encuestaAlimentosBares)
    <h2>Resultados e interpretación - Frecuencia de consumo de alimentos en los bares de la Universidad</h2>
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
      <div class="col-sm-8">   
        <table class="table table-no-border ">
          <tr>              
            <td style="text-align:left"><b>Alimento</td>
            <td style="text-align:left"><b>Frecuencia</td>
            <td style="text-align:left"><b>Num. porciones</td>
          </tr>         
          @foreach($estudiante->encuestaAlimentosBares as $encuesta)       
          <tr>      
            <td style="text-align:left">{{ $encuesta->alimentoBares->nombre }}</td>
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
@stop



  