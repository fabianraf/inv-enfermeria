@extends('layouts.default')
    
@section('content')

<h2>Frecuencia de consumo de alimentos en los bares de la Universidad</h2>
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
            <?php echo "<td style='text-align:left'><a href='/reportes/consumo_alimentos_bares/".$estudiante->id."'><span class='glyphicon glyphicon-search'></span></td>";?>
            <?php echo "<td style='text-align:left'><a href='/reportes/calcular_datos_bares/".$estudiante->id."'><span class='glyphicon glyphicon-refresh'></span></td>";?>      
            <td style="text-align:left">{{ $estudiante->nombre.' '.$estudiante->apellido }}</td>
            <td style="text-align:left">{{ $estudiante->getEdad()." años" }}</td>
            <td style="text-align:left">{{ $estudiante->genero }}</td>
            @if(isset($estudiante->resultadoEncuestasAlimentosBares->usuario_id))           
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->humedad,2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->calorias,2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->proteinas, 2) }}</td>                  
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->hidratos_de_c, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->fibra_dietaria, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->lipidos, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->acidos_grasos_saturados, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->acidos_grasos_monoinsat, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->acidos_grasos_polinsat, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->colesterol, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->n6, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->n3, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->caroteno, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->retinol_re, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_a_total_re, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b1, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b2, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->niacina, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b6, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_b12, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->folatos, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->acido_pantogenico, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_c, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->vit_e, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->calcio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->cobre, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->hierro, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->magnesio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->fosforo, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->potasio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->selenio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->sodio, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->zinc, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->cenizas, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->acido_folico, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->fraccion_comestible, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->carbohidratos_disponibles, 2) }}</td>
                  <td style="text-align:left">{{ round($estudiante->resultadoEncuestasAlimentosBares->fibra_cruda, 2) }}</td>
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



