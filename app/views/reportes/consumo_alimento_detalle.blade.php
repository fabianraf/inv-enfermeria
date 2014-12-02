@extends('layouts.default')
    
@section('content')

<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_alimentos"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>
    <a href="/encuesta_consumo_alimentos?estudiante_id={{$estudiante->id}}"><input type="submit" value="EDITAR ENCUESTA" class="btn btn-success"></a>
    </div><br>
  @endif
  @if($estudiante->encuestaAlimentosUniversidad)
    <h2>Frecuencia de consumo de alimentos en hogar, Universidad y alrededores</h2>
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
      <div class="col-sm-4"> 
        <h4><i><u>Nutrientes</u></i></h4>        
        <ul type = square>
        @if(isset($estudiante->resultadoEncuestasAlimentosUniversidad->usuario_id))
            <p><li><strong>Humedad: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2) }}</p>
            <p><li><strong>Calorías: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2) }}</p>
            <p><li><strong>Proteínas: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2) }}</p>
            <p><li><strong>Hidratos de C: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2) }}</p>
            <p><li><strong>Fibra dietaria: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2) }}</p>
            <p><li><strong>Lípidos: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2) }}</p>
            <p><li><strong>Acidos grasos saturados: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2) }}</p>
            <p><li><strong>Acidos grasos monoinsat: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2) }}</p>
            <p><li><strong>Acidos grasos polinsat: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2) }}</p>
            <p><li><strong>Colesterol: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2) }}</p>
            <p><li><strong>N6: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2) }}</p>
            <p><li><strong>N3: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2) }}</p>
            <p><li><strong>Caroteno: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2) }}</p>
        </div>
        <div class="col-sm-4">
            <p><li><strong>Retinol re: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2) }}</p>
            <p><li><strong>Vitamina A total re: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2) }}</p>
            <p><li><strong>Vitamina B1: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2) }}</p>
            <p><li><strong>Vitamina B2: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2) }}</p>
            <p><li><strong>Niacina: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2) }}</p>
            <p><li><strong>Vitamina B6: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2) }}</p>        
            <p><li><strong>Vitamina B12: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2) }}</p>
            <p><li><strong>Folatos: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2) }}</p>
            <p><li><strong>Acido pantogénico: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2) }}</p>
            <p><li><strong>Vitamina C: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2) }}</p>
            <p><li><strong>Vitamina E: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2) }}</p>
            <p><li><strong>Calcio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2) }}</p>
            <p><li><strong>Cobre: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2) }}</p>
        </div>
        <div class="col-sm-4">
            <p><li><strong>Hierro: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2) }}</p>
            <p><li><strong>Magnesio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2) }}</p>
            <p><li><strong>Fósforo: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2) }}</p>
            <p><li><strong>Potasio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2) }}</p>
            <p><li><strong>Selenio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2) }}</p>
            <p><li><strong>Sodio: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2) }}</p>
            <p><li><strong>Zinc: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2) }}</p>
            <p><li><strong>Cenizas: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2) }}</p>
            <p><li><strong>Acido fólico: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2) }}</p>
            <p><li><strong>Fracción comestible: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2) }}</p>
            <p><li><strong>Carbohidratos disponibles: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2) }}</p>
            <p><li><strong>Fibra cruda: </strong>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2) }}</p>
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
        </div>
        <div class="col-sm-4">
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
        </div>
        <div class="col-sm-4">
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
        </div>        
        @endif
      </ul>
    </div>
</div>
@endif
@stop



  