@extends('layouts.default')
    
@section('content')

<h2>Frecuencia de consumo de alimentos en hogar, Universidad y alrededores</h2>
<hr>    
<div class="table-responsive">    
    </br>
    <table class="table table-no-border ">
      <tr>              
            <td style="text-align:left"><b></td>
            <td style="text-align:left"><b></td> 
            <td style="text-align:left"><b>Nombres</td>
            <td style="text-align:left"><b>Edad</td>
            <td style="text-align:left"><b>Género</td>            
            <td style="text-align:left"><b>Humedad</td>
            <td style="text-align:left"><b>Calorías</td>            
            <td style="text-align:left"><b>Proteínas</td>
            <td style="text-align:left"><b>Hidratos de C</td>
            <td style="text-align:left"><b>Fibra dietaria</td>            
            <td style="text-align:left"><b>Lípidos</td>
            <td style="text-align:left"><b>Acidos grasos saturados</td>
            <td style="text-align:left"><b>Acidos grasos monoinsat</td>
            <td style="text-align:left"><b>Acidos grasos polinsat</td>
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
        @foreach($users as $estudiante)        
        <tr>
            <?php echo "<td style='text-align:left'><a href='/reportes/consumo_alimentos/".$estudiante->id."'><span class='glyphicon glyphicon-search'></span></td>";?>      
            <?php echo "<td style='text-align:left'><a href='/reportes/calcular_datos_universidad/".$estudiante->id."'><span class='glyphicon glyphicon-refresh'></span></td>";?>      
            <td style="text-align:left">{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
            <td style="text-align:left">{{ $estudiante->getEdad()." años" }}</td>
            <td style="text-align:left">{{ $estudiante->genero }}</td>
            @if(isset($estudiante->resultadoEncuestasAlimentosUniversidad->usuario_id))           
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->humedad,2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calorias,2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->proteinas, 2) }}</td>                  
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hidratos_de_c, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_dietaria, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->lipidos, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_saturados, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_monoinsat, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acidos_grasos_polinsat, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->colesterol, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n6, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->n3, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->caroteno, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->retinol_re, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_a_total_re, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b1, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b2, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->niacina, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b6, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_b12, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->folatos, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_pantogenico, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_c, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->vit_e, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->calcio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cobre, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->hierro, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->magnesio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fosforo, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->potasio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->selenio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->sodio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->zinc, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->cenizas, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->acido_folico, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fraccion_comestible, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->carbohidratos_disponibles, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosUniversidad->fibra_cruda, 2) }}</td>
            @else
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>
                  <td style="text-align:left"></td>                 
            @endif
      </tr>     
        @endforeach
    </table>
  </div>
</div>
</div>

@stop



