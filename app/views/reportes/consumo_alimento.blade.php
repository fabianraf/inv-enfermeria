@extends('layouts.default')
    
@section('content')

<h2>Frecuencia de consumo de alimentos en hogar, Universidad y alrededores</h2>
<hr>    
<div class="table-responsive">    
    </br>
    <table class="table table-no-border table-hover table-with-text-aligned-to-the-left">
      <thead>              
            <th></th>
            <th></th> 
            <th>Nombres</th>
            <th>Edad</th>
            <th>Género</th>            
            <th>Humedad</th>
            <th>Calorías</th>            
            <th>Proteínas</th>
            <th>Hidratos de C</th>
            <th>Fibra dietaria</th>            
            <th>Lípidos</th>
            <th>Acidos grasos saturados</th>
            <th>Acidos grasos monoinsat</th>
            <th>Acidos grasos polinsat</th>
            <th>Colesterol</th>
            <th>N6</th>
            <th>N3</th>
            <th>Caroteno</th>
            <th>Retinol re</th>
            <th>Vitamina A total re</th>
            <th>Vitamina B1</th>
            <th>Vitamina B2</th>
            <th>Niacina</th>
            <th>Vitamina B6</th>
            <th>Vitamina B12</th>
            <th>Folatos</th>
            <th>Acido pantogénico</th>
            <th>Vitamina C</th>
            <th>Vitamina E</th>
            <th>Calcio</th>
            <th>Cobre</th>
            <th>Hierro</th>
            <th>Magnesio</th>
            <th>Fósforo</th>
            <th>Potasio</th>
            <th>Selenio</th>
            <th>Sodio</th>
            <th>Zinc</th>
            <th>Cenizas</th>
            <th>Acido fólico</th>
            <th>Fracción comestible</th>
            <th>Carbohidratos disponibles</th>
            <th>Fibra cruda</th>
      </thead>         
        @foreach($users as $estudiante)        
        <tr>
            <?php echo "<td><a href='/reportes/consumo_alimentos/".$estudiante->id."'><span class='glyphicon glyphicon-search'></span></td>";?>      
            <?php echo "<td><a href='/reportes/calcular_datos_universidad/".$estudiante->id."'><span class='glyphicon glyphicon-refresh'></span></td>";?>      
            <td>{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
            <td>{{ $estudiante->getEdad()." años" }}</td>
            <td>{{ $estudiante->genero }}</td>
            @if(isset($estudiante->resultadoEncuestasAlimentosUniversidad->usuario_id))           
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2) }}</td>                  
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2) }}</td>
                  <td>{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2) }}</td>
            @else
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>                 
            @endif
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>

@stop



