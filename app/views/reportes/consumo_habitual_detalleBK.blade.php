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
      <div class="col-sm-4">       
            <h4><i><u>Desayuno</u></i></h4>            
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)            
                @if($consumoHabitual->tiempo_de_comida=='desayuno')
                <table class="table table-bordered col-lg-3">
                <?php $i = 0; ?>                
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)                         
                        <th colspan="4" class="text-center">{{$preparacionCHA->nombre_alimento}}</th>
                            @if($i==0)
                                <tr>
                                    <td>Ingrediente</td>
                                    <td>Cantidad en medidas caseras</td>
                                    <td>Porciones</td>
                                    <td>Grupo de alimentos</td>
                                </tr>
                            @endif
                            <?php $i++; ?>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <tr>
                                <td>{{$ingrediente->ingrediente}}</td>
                                <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                <td>{{$ingrediente->numero_de_porciones}}</td>
                                <td>{{$ingrediente->grupo_de_alimentos}}</td>
                            </tr>                            
                        @endforeach                    
                    @endforeach                
                    </table>
                @endif            
            @endforeach
            <br>
            <h4><i><u>Media Mañana</u></i></h4>        
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='media_manana')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                    <table class="table table-bordered col-lg-3">
                        <th colspan="4" class="text-center">{{$preparacionCHA->nombre_alimento}}</th>                        
                            <tr>
                                <td>Ingrediente</td>
                                <td>Cantidad en medidas caseras</td>
                                <td>Porciones</td>
                                <td>Grupo de alimentos</td>
                            </tr>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <tr>
                                <td>{{$ingrediente->ingrediente}}</td>
                                <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                <td>{{$ingrediente->numero_de_porciones}}</td>
                                <td>{{$ingrediente->grupo_de_alimentos}}</td>
                            </tr>                            
                        @endforeach
                    </table><br>
                    @endforeach                
                @endif            
            @endforeach
            <br>        
        </div>
        <div class="col-sm-4">
            <h4><i><u>Almuerzo</u></i></h4>        
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='almuerzo')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                    <table class="table table-bordered col-lg-3">
                        <th colspan="4" class="text-center">{{$preparacionCHA->nombre_alimento}}</th>                        
                            <tr>
                                <td>Ingrediente</td>
                                <td>Cantidad en medidas caseras</td>
                                <td>Porciones</td>
                                <td>Grupo de alimentos</td>
                            </tr>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <tr>
                                <td>{{$ingrediente->ingrediente}}</td>
                                <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                <td>{{$ingrediente->numero_de_porciones}}</td>
                                <td>{{$ingrediente->grupo_de_alimentos}}</td>
                            </tr>                            
                        @endforeach
                    </table><br>
                    @endforeach                
                @endif            
            @endforeach
            <br>            
        </div>
        <div class="col-sm-4">
            <h4><i><u>Media Tarde</u></i></h4>        
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='media_tarde')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                    <table class="table table-bordered col-lg-3">
                        <th colspan="4" class="text-center">{{$preparacionCHA->nombre_alimento}}</th>                        
                            <tr>
                                <td>Ingrediente</td>
                                <td>Cantidad en medidas caseras</td>
                                <td>Porciones</td>
                                <td>Grupo de alimentos</td>
                            </tr>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <tr>
                                <td>{{$ingrediente->ingrediente}}</td>
                                <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                <td>{{$ingrediente->numero_de_porciones}}</td>
                                <td>{{$ingrediente->grupo_de_alimentos}}</td>
                            </tr>                            
                        @endforeach
                    </table><br>
                    @endforeach                
                @endif            
            @endforeach
            <br>
            <h4><i><u>Cena</u></i></h4>        
            @foreach($estudiante->consumoHabitualDeAlimento as $consumoHabitual)
                @if($consumoHabitual->tiempo_de_comida=='merienda')
                    @foreach($consumoHabitual->preparacionConsumoHabitualDeAlimentos as $preparacionCHA)
                    <table class="table table-bordered col-lg-3">
                        <th colspan="4" class="text-center">{{$preparacionCHA->nombre_alimento}}</th>                        
                            <tr>
                                <td>Ingrediente</td>
                                <td>Cantidad en medidas caseras</td>
                                <td>Porciones</td>
                                <td>Grupo de alimentos</td>
                            </tr>
                        @foreach($preparacionCHA->ingredientesPreparacionConsumoHabitualDeAlimento as $ingrediente)
                            <tr>
                                <td>{{$ingrediente->ingrediente}}</td>
                                <td>{{$ingrediente->cantidad_en_medidas_caseras}}</td>
                                <td>{{$ingrediente->numero_de_porciones}}</td>
                                <td>{{$ingrediente->grupo_de_alimentos}}</td>
                            </tr>                            
                        @endforeach
                    </table><br>
                    @endforeach                
                @endif            
            @endforeach
            <br>            
        </div>      
    </div>
</div>

@endif
@stop



  