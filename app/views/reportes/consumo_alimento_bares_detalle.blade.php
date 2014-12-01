@extends('layouts.default')
    
@section('content')

<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_alimentos_bares"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
    <a href="/encuesta_consumo_alimentos_bares?estudiante_id={{$estudiante->id}}"><input type="submit" value="EDITAR ENCUESTA" class="btn btn-success"></a>
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
      <ul class="list-group">
        @if(isset($estudiante->resultadoEncuestasAlimentosBares->usuario_id))
            <div class="col-lg-4">
                <li class="list-group-item"><strong>Humedad: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->humedad,2) }}</li>
                <li class="list-group-item"><strong>Calorías: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->calorias,2) }}</li>
                <li class="list-group-item"><strong>Proteínas: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->proteinas, 2) }}</li>
                <li class="list-group-item"><strong>Hidratos de C: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->hidratos_de_c, 2) }}</li>
                <li class="list-group-item"><strong>Fibra dietaria: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->fibra_dietaria, 2) }}</li>
                <li class="list-group-item"><strong>Lípidos: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->lipidos, 2) }}</li>
                <li class="list-group-item"><strong>Acidos grasos saturados: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->acidos_grasos_saturados, 2) }}</li>
                <li class="list-group-item"><strong>Acidos grasos monoinsat: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->acidos_grasos_monoinsat, 2) }}</li>
                <li class="list-group-item"><strong>Acidos grasos polinsat: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->acidos_grasos_polinsat, 2) }}</li>
                <li class="list-group-item"><strong>Colesterol: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->colesterol, 2) }}</li>
                <li class="list-group-item"><strong>N6: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->n6, 2) }}</li>
                <li class="list-group-item"><strong>N3: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->n3, 2) }}</li>
                <li class="list-group-item"><strong>Caroteno: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->caroteno, 2) }}</li>
                <li class="list-group-item"><strong>Retinol re: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->retinol_re, 2) }}</li>
            </div>

            <div class="col-lg-4">
                <li class="list-group-item"><strong>Vitamina A total re: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_a_total_re, 2) }}</li>
                <li class="list-group-item"><strong>Vitamina B1: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b1, 2) }}</li>
                <li class="list-group-item"><strong>Vitamina B2: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b2, 2) }}</li>
                <li class="list-group-item"><strong>Niacina: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->niacina, 2) }}</li>
                <li class="list-group-item"><strong>Vitamina B6: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b6, 2) }}</li>
                <li class="list-group-item"><strong>Vitamina B12: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b12, 2) }}</li>
                <li class="list-group-item"><strong>Folatos: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->folatos, 2) }}</li>
                <li class="list-group-item"><strong>Acido pantogénico: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->acido_pantogenico, 2) }}</li>
                <li class="list-group-item"><strong>Vitamina C: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_c, 2) }}</li>
                <li class="list-group-item"><strong>Vitamina E: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_e, 2) }}</li>
                <li class="list-group-item"><strong>Calcio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->calcio, 2) }}</li>
                <li class="list-group-item"><strong>Cobre: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->cobre, 2) }}</li>
                <li class="list-group-item"><strong>Hierro: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->hierro, 2) }}</li>
                <li class="list-group-item"><strong>Magnesio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->magnesio, 2) }}</li>
                
            </div>
            
            <div class="col-lg-4">
                <li class="list-group-item"><strong>Fósforo: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->fosforo, 2) }}</li>
                <li class="list-group-item"><strong>Potasio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->potasio, 2) }}</li>
                <li class="list-group-item"><strong>Selenio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->selenio, 2) }}</li>
                <li class="list-group-item"><strong>Sodio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->sodio, 2) }}</li>
                <li class="list-group-item"><strong>Zinc: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->zinc, 2) }}</li>
                <li class="list-group-item"><strong>Cenizas: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->cenizas, 2) }}</li>
                <li class="list-group-item"><strong>Acido fólico: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->acido_folico, 2) }}</li>
                <li class="list-group-item"><strong>Fracción comestible: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->fraccion_comestible, 2) }}</li>
                <li class="list-group-item"><strong>Carbohidratos disponibles: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->carbohidratos_disponibles, 2) }}</li>
                <li class="list-group-item"><strong>Fibra cruda: </strong>{{ round($estudiante->resultadoEncuestasAlimentosBares->fibra_cruda, 2) }}</p></li>
            </div>

        @else
            <p><li><strong>Humedad: </strong></p>
            <p><li><strong>Calorías: </strong></p>
            <p><li><strong>Proteínas: </strong></p>
            <p><li><strong>Hidratos de C: </strong></p>
            <p><li><strong>Fibra dietaria: </strong></p>
            <p><li><strong>Lípidos: </strong></p>
            <p><li><strong>Acidos grasos saturados: </strong></p>
            <p><li><strong>Acidos grasos monoinsat: </strong></p>
            <p><li><strong>Acidos grasos polinsat: </strong></p>
            <p><li><strong>Colesterol: </strong></p>
            <p><li><strong>N6: </strong></p>
            <p><li><strong>N3: </strong></p>
            <p><li><strong>Caroteno: </strong></p>
            <p><li><strong>Retinol re: </strong></p>
            <p><li><strong>Vitamina A total re: </strong></p>
            <p><li><strong>Vitamina B1: </strong></p>
            <p><li><strong>Vitamina B2: </strong></p>
            <p><li><strong>Niacina: </strong></p>
            <p><li><strong>Vitamina B6: </strong></p>
            <p><li><strong>Vitamina B12: </strong></p>
            <p><li><strong>Folatos: </strong></p>
            <p><li><strong>Acido pantogénico: </strong></p>
            <p><li><strong>Vitamina C: </strong></p>
            <p><li><strong>Vitamina E: </strong></p>
            <p><li><strong>Calcio: </strong></p>
            <p><li><strong>Cobre: </strong></p>
            <p><li><strong>Hierro: </strong></p>
            <p><li><strong>Magnesio: </strong></p>
            <p><li><strong>Fósforo: </strong></p>
            <p><li><strong>Potasio: </strong></p>
            <p><li><strong>Selenio: </strong></p>
            <p><li><strong>Sodio: </strong></p>
            <p><li><strong>Zinc: </strong></p>
            <p><li><strong>Cenizas: </strong></p>
            <p><li><strong>Acido fólico: </strong></p>
            <p><li><strong>Fracción comestible: </strong></p>
            <p><li><strong>Carbohidratos disponibles: </strong></p>
            <p><li><strong>Fibra cruda: </strong></p>
        @endif
      </ul>
    </div>
</div>
@endif
@stop



  