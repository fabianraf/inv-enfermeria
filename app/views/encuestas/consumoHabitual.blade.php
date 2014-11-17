@extends('layouts.default')

@section('cabecera')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	{{ HTML::script('/js/jquery-clockpicker.js') }}
	{{ HTML::style('/css/bootstrap-clockpicker.css') }}
	<script>
	$(function() {
		activar_tags();

	});

	</script>
@stop	

@section('content')

{{ Form::open(array('url' => '/grabar_consumo_habitual', 'id' => 'form-consumo-habitual')) }}

<div class="col-lg-12">
	<h2>Consumo habitual de alimentos
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
		</div>
	</h2>
	<div id="mensajes">
	
		<?php if(ConsumoHabitualDeAlimento::encuestasConsumoHabitualCompleto()){ ?>
			<div class="alert alert-warning">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
						Ya se han completado 392 encuestas.
		    </div>
		<?php } ?>
		@if(isset($message))
		    <div class="alert alert-success">
		        <a href="#" class="close" data-dismiss="alert">&times;</a>
						{{$message}}
		    </div>
		@endif
	</div>
	
	<hr>	
	</br>
	
	<div class="row">
		{{ Form::label('alumno', 'Alumno',array('class' => 'col-sm-1 col-lg-1 control-label')); }}
		
		<div class="col-sm-6">
			{{ Form::text('nombre_alumno','', array('class' => 'form-control', 'placeholder' => 'Buscar estudiante', 'id' => 'nombre_alumno', 'onkeyup' => 'cUpper(this)' )); }}
		</div>
		<input type="button" value="Obtener Alumno" class="btn btn-warning" id="obtener_alumno">
		{{ Form::hidden('alumno_id','', array('id' => 'alumno_id' )); }}
	</div>

	<br><br/>

	<div class="row">
	{{ Form::button("Desayuno", array('class'=>'btn btn-default btn-info btn-striped tiempo', 'id' => 'desayuno')) }} 
	{{ Form::button("Media Mañana", array('class'=>'btn btn-default btn-success btn-striped tiempo', 'id' => 'media_manana')) }} 
	{{ Form::button("Almuerzo", array('class'=>'btn btn-default btn-success btn-striped tiempo', 'id' => 'almuerzo')) }} 
	{{ Form::button("Media Tarde", array('class'=>'btn btn-default btn-success btn-striped tiempo', 'id' => 'media_tarde')) }} 
	{{ Form::button("Merienda", array('class'=>'btn btn-default btn-success btn-striped tiempo', 'id' => 'merienda')) }} 
	</div>	</br></br>

	<div class="row show-grid">
		<div class="col-sm-6 col-lg-2">
			<h5>Horario</h5>
		</div>
		<div class="col-sm-6 col-lg-1">
			<h5>Lugar</h5>
		</div>	
		<div class="col-sm-6 col-lg-1">
			<h5>Gasto diario ($)</h5>
		</div>
		<div class="col-sm-6 col-lg-2">
			<h5>Preparación/alimento</h5>
		</div>
		<div class="col-sm-6 col-lg-1">
			<h5>Forma de cocción</h5>
		</div>
		<div class="col-sm-6 col-lg-2">
			<h5>Ingredientes</h5>
		</div>
		<div class="col-sm-6 col-lg-1">
			<h5>Cantidad en medidas caseras</h5>
		</div>
		<div class="col-sm-6 col-lg-1">
			<h5>Num. porciones</h5>
		</div>
		<div class="col-sm-6 col-lg-1">
			<h5>Grupo de alimento</h5>
		</div>	
		
	</div>

	<?php 
	// $tiempos = ["desayuno"]; 
	$tiempos = ["desayuno", "media_manana", "almuerzo", "media_tarde", "merienda"]; 
	?>
	<?php $row_counter = 0; ?>
	<?php 
		foreach($tiempos as $tiempo){ 
			// $class = "tiempo ";
			if($tiempo == "desayuno")
				$class = "";
			else
				$class = "hidden";
		
	?> 
	{{ Form::hidden('numero_de_preparaciones_'.$tiempo,'3', array('id' => 'numero_de_preparaciones_'.$tiempo )); }}
	<div id="{{$tiempo}}-id" class="{{$class}}">
		<div class="row">
			<div class="col-sm-6 col-lg-2">
				<h4>No Aplica  <input type="checkbox" name="no_aplica_{{$tiempo}}" value="1" onclick="desactiva_tiempo('{{$tiempo}}')" id="no_aplica_{{$tiempo}}"></h4>
			</div>
		</div>	
		<div class="row top7">
			<div class="col-sm-6 col-lg-2">
				
				<div class="input-group clockpicker">
				<?php 
					if($tiempo == "desayuno")
						$hora = "7:00";
					elseif($tiempo == "media_manana")
						$hora = "11:00";
					elseif($tiempo == "almuerzo")
						$hora = "13:00";
					elseif($tiempo == "media_tarde")
						$hora = "16:00";
					elseif($tiempo == "merienda") 
						$hora = "20:00";
				?>
				    <input type="text" class="form-control" value="{{$hora}}" name="horario_{{$tiempo}}">
				    <span class="input-group-addon">
				        <span class="glyphicon glyphicon-time"></span>
				    </span>
				</div>
			</div>
			<div class="col-sm-6 col-lg-1">
				<select class="small-select" name="lugar_{{$tiempo}}">
						<option>----</option>
						<option>Hogar</option>
						<option>Restaurante</option>
						<option>Tienda</option>
						<option>Cafeteria</option>
						<option>Bar</option>
						<option>Comedor</option>
				</select>
			</div>	
			<div class="col-sm-6 col-lg-1">
				{{Form::text('gasto_diario_'.$tiempo, Input::old('gasto'), array('class'=>'small'))}}
			</div>
			<div class="col-sm-6 col-lg-2">
				<input class="small" type="text" name="nombre_alimento_{{$tiempo}}_1" id="nombre-alimento-{{$tiempo}}-1"/>
				<a href="javascript:anadir_alimento('{{$tiempo}}')"><span class="glyphicon glyphicon-plus"></span> Añadir preparación</a>
			</div>
			<div class="col-sm-6 col-lg-1">
				<select class="small-select" name="forma_de_coccion_{{$tiempo}}_1">
						<option>----</option>
						<option>Crudo</option>
						<option>Al natural</option>
						<option>Cocido</option>
						<option>Estofado</option>
						<option>Frito</option>
						<option>Al Horno</option>
						<option>A la plancha</option>
						<option>Al vapor</option>
					</select>
			</div>
			<div class="col-sm-6 col-lg-2">
				<input class="small col-lg-12 ui-autocomplete-input tags" type="text" name="ingredientes_{{$tiempo}}_1[]"/>
				
			</div>
			<div class="col-sm-6 col-lg-1">
				{{Form::text('cantidad_'.$tiempo.'_1[]', Input::old('cantidad'), array('class'=>'small'))}}
			</div>
			<div class="col-sm-6 col-lg-1">
				{{Form::text('porciones_'.$tiempo.'_1[]', Input::old('porciones'), array('class'=>'small'))}}
			</div>
			<div class="col-sm-6 col-lg-1">
				<select class="small-select" name="grupo_alimento_{{$tiempo}}_1[]">
						<option>-</option>
						<option>LE</option>
						<option>LSD</option>
						<option>LD</option>
						<option>V</option>
						<option>F</option>
						<option>Al</option>
						<option>Az</option>
						<option>C</option>
						<option>G</option>
					</select>
			</div>	
			<div class="col-sm-6 col-lg-1">
				
			</div>	
		</div>

		<?php for($i = 1; $i < 4; $i++){ ?>
			<?php $row_counter++; ?> 
			<div class="row" id="row-{{$row_counter}}">
				<div class="col-sm-6 col-lg-2">
					&nbsp;
				</div>
				<div class="col-sm-6 col-lg-1">
					&nbsp;
				</div>	
				<div class="col-sm-6 col-lg-1">
					&nbsp;
				</div>
				<div class="col-sm-6 col-lg-2">
					&nbsp;
				</div>
				<div class="col-sm-6 col-lg-1">
					&nbsp;
				</div>
				<div class="col-sm-6 col-lg-2">
					<input class="small col-lg-12 ui-autocomplete-input tags" type="text" name="ingredientes_{{$tiempo}}_1[]"/>
					<?php if($i == 3){ ?> 
						<a href="#" onclick="anadir_ingrediente(this); return false;">Añadir ingrediente</a>
					<?php } ?>
				</div>
				<div class="col-sm-6 col-lg-1">
					{{Form::text('cantidad_'.$tiempo.'_1[]', Input::old('cantidad'), array('class'=>'small'))}}
				</div>
				<div class="col-sm-6 col-lg-1">
					{{Form::text('porciones_'.$tiempo.'_1[]', Input::old('porciones'), array('class'=>'small'))}}
				</div>
				<div class="col-sm-6 col-lg-1">
					<select class="small-select" name="grupo_alimento_{{$tiempo}}_1[]">
							<option>-</option>
							<option>LE</option>
							<option>LSD</option>
							<option>LD</option>
							<option>V</option>
							<option>F</option>
							<option>Al</option>
							<option>Az</option>
							<option>C</option>
							<option>G</option>
						</select>
				</div>	
			</div>

		<?php } ?>


		<div class="top10 {{$tiempo}}-row">
			<div class="row">
				<div class="col-sm-6 col-lg-2">
					&nbsp;
				</div>
				<div class="col-sm-6 col-lg-1">
					&nbsp;
				</div>	
				<div class="col-sm-6 col-lg-1">
					&nbsp;
				</div>
				<div class="col-sm-6 col-lg-2 nombre-alimento">
					<input class="small" type="text" name="nombre_alimento_{{$tiempo}}_2"/>
				</div>
				<div class="col-sm-6 col-lg-1">
					<select class="small-select forma_de_coccion" name="forma_de_coccion_{{$tiempo}}_2">
							<option>----</option>
							<option>Crudo</option>
							<option>Al natural</option>
							<option>Cocido</option>
							<option>Estofado</option>
							<option>Frito</option>
							<option>Al Horno</option>
							<option>A la plancha</option>
							<option>Al vapor</option>
						</select>
				</div>
				<div class="col-sm-6 col-lg-2 ingredientes">
					<input class="small col-lg-12 ui-autocomplete-input tags" type="text" name="ingredientes_{{$tiempo}}_2[]"/> 
				</div>
				<div class="col-sm-6 col-lg-1 cantidad">
					{{Form::text('cantidad_'.$tiempo.'_2[]', Input::old('cantidad'), array('class'=>'small'))}}
				</div>
				<div class="col-sm-6 col-lg-1 porciones">
					{{Form::text('porciones_'.$tiempo.'_2[]', Input::old('porciones'), array('class'=>'small'))}}
				</div>
				<div class="col-sm-6 col-lg-1 grupo-de-alimentos">
					<select class="small-select" name="grupo_alimento_{{$tiempo}}_2[]">
							<option>-</option>
							<option>LE</option>
							<option>LSD</option>
							<option>LD</option>
							<option>V</option>
							<option>F</option>
							<option>Al</option>
							<option>Az</option>
							<option>C</option>
							<option>G</option>
						</select>
				</div>	
			</div>
			<div class="ingredientes-extra">
				<?php for($i = 1; $i < 4; $i++){ ?>
					<?php $row_counter++; ?>
					<div class="row" id="row-{{$row_counter}}">
						<div class="col-sm-6 col-lg-2">
							&nbsp;
						</div>
						<div class="col-sm-6 col-lg-1">
							&nbsp;
						</div>	
						<div class="col-sm-6 col-lg-1">
							&nbsp;
						</div>
						<div class="col-sm-6 col-lg-2">
							&nbsp;
						</div>
						<div class="col-sm-6 col-lg-1">
							&nbsp;
						</div>
						<div class="col-sm-6 col-lg-2">
							<input class="small col-lg-12 ui-autocomplete-input tags ingrediente-extra-nombre" type="text" name="ingredientes_{{$tiempo}}_2[]"/>
							<?php if($i == 3){ ?> 
								<a href="#" onclick="anadir_ingrediente(this); return false;">Añadir ingrediente</a>
							<?php } ?>
						</div>
						<div class="col-sm-6 col-lg-1">
							{{Form::text('cantidad_'.$tiempo.'_2[]', Input::old('cantidad'), array('class'=>'small ingrediente-extra-cantidad'))}}
						</div>
						<div class="col-sm-6 col-lg-1">
							{{Form::text('porciones_'.$tiempo.'_2[]', Input::old('porciones'), array('class'=>'small ingrediente-extra-porciones'))}}
						</div>
						<div class="col-sm-6 col-lg-1">
							<select class="small-select ingrediente-extra-grupo-alimento" name="grupo_alimento_{{$tiempo}}_2[]">
									<option>-</option>
									<option>LE</option>
									<option>LSD</option>
									<option>LD</option>
									<option>V</option>
									<option>F</option>
									<option>Al</option>
									<option>Az</option>
									<option>C</option>
									<option>G</option>
								</select>
						</div>	
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
	<input type="hidden" name="row_counter" value="{{$row_counter}}" id="row_counter">



</div>
{{ Form::close() }}
@stop