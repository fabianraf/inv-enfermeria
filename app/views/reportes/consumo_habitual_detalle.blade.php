@extends('layouts.default')
    
@section('content')

<div class="col-lg-12">
  @if(Auth::user()->perfiles_usuario_id != "2")
  <div class="pull-right">
    <a href="/reportes/consumo_habitual"><input type="button" value="VOLVER" class="btn btn-primary"></button></a>    
    </div><br>
  @endif
  @if($estudiante->encuestaAlimentosUniversidad)
    <h2>Consumo habitual de alimentos</h2>
    <hr>
    </br>
    <div class="col-md-4 col-lg-12" >
      <h4><i><u>Datos personales</u></i></h4>
      <ul type = square>
        <p><li><strong>Email: </strong>{{ $estudiante->email }}</p>
        <p><li><strong>Nombre: </strong>{{ $estudiante->nombre.' '. $estudiante->apellido}}</p>
        <p><li><strong>Edad: </strong>{{ $estudiante->getEdad()}} años</p>        
      </ul>
    </div>

    <div class="row">   
      <div class="col-sm-12"><br><br>     
        <table class="table table-bordered col-lg-12">
            <tr>
                <td></td>
                <th class="text-center">Preparación</td>
                <th class="text-center">Ingrediente</td>
                <th class="text-center">Cantidad en medidas caseras</td>
                <th class="text-center">Número de porciones</td>
                <th class="text-center">Grupo de alimentos</td>
            </tr>
            <?php 
                $desayuno=0; 
                $media_manana=0;
                $almuerzo=0;
                $media_tarde=0;
                $merienda=0;
            ?>
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='desayuno')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <?php $desayuno ++; ?>
                        @endforeach
                    @endforeach
                @endif
                @if($consumoHabitual->tiempo_de_comida=='media_manana')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <?php $media_manana ++; ?>
                        @endforeach
                    @endforeach
                @endif
                @if($consumoHabitual->tiempo_de_comida=='almuerzo')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <?php $almuerzo ++; ?>
                        @endforeach
                    @endforeach
                @endif
                @if($consumoHabitual->tiempo_de_comida=='media_tarde')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <?php $media_tarde ++; ?>
                        @endforeach
                    @endforeach
                @endif
                @if($consumoHabitual->tiempo_de_comida=='merienda')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <?php $merienda ++; ?>
                        @endforeach
                    @endforeach
                @endif
            @endforeach

            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)            
                @if($consumoHabitual->tiempo_de_comida=='desayuno')
                    <?php $i = 0; ?>                    
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @if($i==0)
                            <tr>
                                <?php echo "<th class='text-center' align='middle' rowspan=".$desayuno.">Desayuno</td>"; ?>
                                <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach                           
                            </tr>
                        @else
                            <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach
                        @endif
                    <?php $i++; ?>                                             
                    @endforeach                
                @endif
                @if($consumoHabitual->tiempo_de_comida=='media_manana')
                    <?php $i = 0; ?>                    
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @if($i==0)
                            <tr>
                                <?php echo "<th class='text-center' rowspan=".$media_manana.">Media Mañana</td>"; ?>
                                <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach                           
                            </tr>
                        @else
                            <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach
                        @endif
                    <?php $i++; ?>                                             
                    @endforeach                
                @endif
                @if($consumoHabitual->tiempo_de_comida=='almuerzo')
                    <?php $i = 0; ?>                    
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @if($i==0)
                            <tr>
                                <?php echo "<th class='text-center' rowspan=".$almuerzo.">Almuerzo</td>"; ?>
                                <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach                           
                            </tr>
                        @else
                            <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach
                        @endif
                    <?php $i++; ?>                                             
                    @endforeach                
                @endif
                @if($consumoHabitual->tiempo_de_comida=='media_tarde')
                    <?php $i = 0; ?>                    
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @if($i==0)
                            <tr>
                                <?php echo "<th class='text-center' rowspan=".$media_tarde.">Media Tarde</td>"; ?>
                                <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach                           
                            </tr>
                        @else
                            <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach
                        @endif
                    <?php $i++; ?>                                             
                    @endforeach                
                @endif
                @if($consumoHabitual->tiempo_de_comida=='merienda')
                    <?php $i = 0; ?>                    
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                        @if($i==0)
                            <tr>
                                <?php echo "<th class='text-center' rowspan=".$merienda.">Merienda</td>"; ?>
                                <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach                           
                            </tr>
                        @else
                            <?php $totalIngredientes=0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    <?php $totalIngredientes ++; ?>
                                @endforeach
                                <?php $j = 0; ?>
                                @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                                    @if($j==0)
                                        <?php echo "<td rowspan=".$totalIngredientes.">".$preparacionCHA->nombre_alimento."</td>"; ?>
                                        <td>{{$ingrediente->ingrediente}}</td>
                                        <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                        <td>{{$ingrediente->numero_de_porciones}}</td>
                                        <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                    @else
                                        <tr>
                                            <td>{{$ingrediente->ingrediente}}</td>
                                            <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                            <td>{{$ingrediente->numero_de_porciones}}</td>
                                            <td>{{$ingrediente->grupo_de_alimentos}}</td>
                                        </tr>
                                    @endif
                                <?php $j++; ?>                                        
                                @endforeach
                        @endif
                    <?php $i++; ?>                                             
                    @endforeach                
                @endif            
            @endforeach
            </table>                        
        </div>      
    </div>
    <?php 
    $totalCHO = 0;
    $totalPROT = 0;
    $totalGRAS = 0;
    $totalKcal = 0;
    ?>
    @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
        @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
            @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                <?php 
                    if($ingrediente->grupo_de_alimentos=='L'){
                        $totalCHO += $ingrediente->numero_de_porciones*0;
                        $totalPROT += $ingrediente->numero_de_porciones*0;
                        $totalGRAS += $ingrediente->numero_de_porciones*0;
                        $totalKcal += $ingrediente->numero_de_porciones*0;
                    }
                    if($ingrediente->grupo_de_alimentos=='LE'){
                        $totalCHO += $ingrediente->numero_de_porciones*12;
                        $totalPROT += $ingrediente->numero_de_porciones*8;
                        $totalGRAS += $ingrediente->numero_de_porciones*8;
                        $totalKcal += $ingrediente->numero_de_porciones*150;
                    }
                    if($ingrediente->grupo_de_alimentos=='LSD'){
                        $totalCHO += $ingrediente->numero_de_porciones*12;
                        $totalPROT += $ingrediente->numero_de_porciones*8;
                        $totalGRAS += $ingrediente->numero_de_porciones*5;
                        $totalKcal += $ingrediente->numero_de_porciones*120;
                    }
                    if($ingrediente->grupo_de_alimentos=='LD'){
                        $totalCHO += $ingrediente->numero_de_porciones*12;
                        $totalPROT += $ingrediente->numero_de_porciones*8;
                        $totalGRAS += $ingrediente->numero_de_porciones*1;
                        $totalKcal += $ingrediente->numero_de_porciones*90;
                    }
                    if($ingrediente->grupo_de_alimentos=='V'){
                        $totalCHO += $ingrediente->numero_de_porciones*5;
                        $totalPROT += $ingrediente->numero_de_porciones*2;
                        $totalGRAS += $ingrediente->numero_de_porciones*0;
                        $totalKcal += $ingrediente->numero_de_porciones*25;
                    }
                    if($ingrediente->grupo_de_alimentos=='F'){
                        $totalCHO += $ingrediente->numero_de_porciones*15;
                        $totalPROT += $ingrediente->numero_de_porciones*0;
                        $totalGRAS += $ingrediente->numero_de_porciones*0;
                        $totalKcal += $ingrediente->numero_de_porciones*60;
                    }
                    if($ingrediente->grupo_de_alimentos=='Al'){
                        $totalCHO += $ingrediente->numero_de_porciones*15;
                        $totalPROT += $ingrediente->numero_de_porciones*2;
                        $totalGRAS += $ingrediente->numero_de_porciones*5;
                        $totalKcal += $ingrediente->numero_de_porciones*115;
                    }
                    if($ingrediente->grupo_de_alimentos=='Az'){
                        $totalCHO += $ingrediente->numero_de_porciones*10;
                        $totalPROT += $ingrediente->numero_de_porciones*0;
                        $totalGRAS += $ingrediente->numero_de_porciones*0;
                        $totalKcal += $ingrediente->numero_de_porciones*40;
                    }
                    if($ingrediente->grupo_de_alimentos=='C'){
                        $totalCHO += $ingrediente->numero_de_porciones*0;
                        $totalPROT += $ingrediente->numero_de_porciones*7;
                        $totalGRAS += $ingrediente->numero_de_porciones*5;
                        $totalKcal += $ingrediente->numero_de_porciones*75;
                    }
                    if($ingrediente->grupo_de_alimentos=='G'){
                        $totalCHO += $ingrediente->numero_de_porciones*0;
                        $totalPROT += $ingrediente->numero_de_porciones*0;
                        $totalGRAS += $ingrediente->numero_de_porciones*5;
                        $totalKcal += $ingrediente->numero_de_porciones*45;
                    }                                    
                ?>
            @endforeach
        @endforeach
    @endforeach
    <div class="col-sm-6">
        <p><li><strong>CHO (g): </strong>{{ round($totalCHO,2) }}</p>
        <p><li><strong>PROT (g): </strong>{{ round($totalPROT,2) }}</p>
        <p><li><strong>GRAS (g): </strong>{{ round($totalGRAS,2) }}</p>
        <p><li><strong>Kcal Total: </strong>{{ round($totalKcal,2) }}</p>
    </div> 
</div>

@endif
@stop



  
