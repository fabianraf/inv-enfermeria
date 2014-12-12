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
</div>

@endif
@stop



  