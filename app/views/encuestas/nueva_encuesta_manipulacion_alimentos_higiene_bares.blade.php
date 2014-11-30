@extends('layouts.default')

@section('cabecera')
	{{ HTML::script('/js/emahc.js') }}
@stop

@section('content')

{{ Form::open(array('url' => '/encuesta_manipulacion_bares/guardar_informacion', 'id' => 'tbd')) }}
<input type="hidden" name="empresa_id" value="{{$empresa->id}}">
<div class="col-lg-12">
	<h2>Control de manipulación de alimentos e higiene de los bares de la PUCE</br></br>
		{{ $empresa->nombre }}
		<div class="pull-right">
			<a href="/encuestas_manipulacion_bares/empresas"><input type="button" value="VOLVER A EMPRESAS" class="btn btn-warning"></a>
			<input type="submit" value="GRABAR" class="btn btn-success">
			<!-- <input type="button" value="GRABAR BORRADOR" class="btn btn-warning"> -->
			<!-- <input type="button" value="LIMPIAR" class="btn btn-warning"> -->
		</div>
	</h2>
	<hr>

	<!-- <div class="row">
		{{ Form::label('nombre_bar', 'Nombre de Bar',array('class' => 'col-sm-1 col-lg-2 control-label')); }}
		
		<div class="col-sm-6 col-lg-8">
			{{ Form::text('nombre_bar','', array('class' => 'form-control', 'placeholder' => 'Nombre de bar', 'id' => 'nombre_bar' )); }}
		</div>
		
	</div> -->

	<div class="col-lg-12 top10">
		@if(isset($message))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				{{$message}}
    </div>
		@endif
		
		
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
				Por favor completa todas las etiquetas rojas.
    </div>
		
		@foreach($opciones as $key => $opcion)
			<?php 
			if($key == 0)
				$button_class = " btn-info btn-striped";				
			else
				$button_class = "btn-danger btn-striped";					
							
			?>
			{{ Form::button($opcion, array('class'=>'btn btn-default opcion ' . $button_class, 'onclick' => 'submit_emahc("'.$key.'")', 'id' => 'opcion-'.$key)) }}
		@endforeach
	</div>
	</br></br>
	
	

	<div class="top30 col-lg-12">
		@foreach($opciones as $key => $opcion)
			<?php 
				if($key == 0)
					$class = "";
				else
					$class = "hidden";
			?>
			<?php if($key == "0"){ ?>
			<table class="table table-bordered table-hover col-lg-12 {{ $class }}" id="opcion-tabla-{{$key}}"> 
				<tr>				
					<th rowspan="2">	
						<h3>{{$opcion}}
					</th>				
					<th colspan="3">
						Cumple
					</th>
					<th rowspan="2">
						No hay Termómetro
					</th>
				</tr>		
			  	<tr>
			  		<td>Sí</td>
			    	<td>No</td>		   
			    	<td>No se pudo observar</td> 
			  	</tr>	

			  	@foreach(Etiqueta::getEtiquetasPorPosicion(14)->get() as $etiqueta)
			  	<?php 
			  		$si_cumple = "";
			  		$no_cumple = "";
			  		$no_se_pudo_observar = "";
			  		$no_hay_termometro = "";
			  		$fila_encuesta = EncuestaManipulacionAlimento::where("etiqueta_id", "=", $etiqueta->id)
			  														->where("empresa_id", "=", $empresa->id)->get()->first();
			  		if(isset($fila_encuesta)){
			  			if($fila_encuesta->no_hay_termometro == 1){
			  				$no_hay_termometro = "checked";
			  			} else{
				  			if($fila_encuesta->cumple == Config::get('constants.SI_CUMPLE')){
				  				$si_cumple = "checked";
				  			}elseif($fila_encuesta->cumple == Config::get('constants.NO_CUMPLE')){
				  				$no_cumple = "checked";
				  			} elseif($fila_encuesta->cumple == Config::get('constants.NO_SE_PUDO_OBSERVAR')){
				  				$no_se_pudo_observar = "checked";
				  			}
			  			}
			  		}
			  	?>
			  	<tr id="fila-encuestas-manipulacion-alimentos-{{$etiqueta->id}}">
					<td>{{$etiqueta->titulo}}</td>
					<td><input {{$si_cumple}} required="required" type="radio" name="encuestas_manipulacion_alimentos[cumple][{{$etiqueta->id}}]" value="{{Config::get('constants.SI_CUMPLE')}}" class="cumple" onclick="uncheck_no_aplica(this)"></td>
					<td><input {{$no_cumple}} type="radio" name="encuestas_manipulacion_alimentos[cumple][{{$etiqueta->id}}]" value="{{Config::get('constants.NO_CUMPLE')}}" class="cumple" onclick="uncheck_no_aplica(this)"></td>
					<td><input {{$no_se_pudo_observar}} type="radio" name="encuestas_manipulacion_alimentos[cumple][{{$etiqueta->id}}]" value="{{Config::get('constants.NO_SE_PUDO_OBSERVAR')}}" class="cumple" onclick="uncheck_no_aplica(this)"></td>
					<td><input {{$no_hay_termometro}} type="checkbox" name="encuestas_manipulacion_alimentos[no_hay_termometro][{{$etiqueta->id}}]" value="1" class="no-aplica" ></td>
				</tr>		
				@endforeach
			</table>
			<?php } elseif($key == 1){ ?>
				<table class="table table-bordered table-hover col-lg-12 {{ $class }}" id="opcion-tabla-{{$key}}" > 
					<tr>				
						<th>	
							<h3>{{$opcion}}
						</th>				
						<th>
							Lugar adquirido
						</th>
						<th>
							Registro Sanitario					
						</th>
						<th>
							Fecha de caducidad					
						</th>
						<th>
							Sello de control					
						</th>
						<th>
							No aplica					
						</th>
					</tr>
					@foreach(Etiqueta::getEtiquetasPorPosicion(15)->get() as $etiqueta)
						<?php 
					  		$lugar_adquirido = "";
					  		$registro_sanitario = "";
					  		$fecha_de_caducidad = "";
					  		$sello_de_control = "";
					  		$no_aplica = "";
					  		$fila_encuesta = EncuestaManipulacionProductosAlimenticio::where("etiqueta_id", "=", $etiqueta->id)
					  														->where("empresa_id", "=", $empresa->id)->get()->first();
					  		if(isset($fila_encuesta)){
					  			if($fila_encuesta->no_aplica == 1){
					  				$no_aplica = "checked";
					  			} else{
						  				$lugar_adquirido = $fila_encuesta->lugar_adquirido;
						  				$registro_sanitario = $fila_encuesta->registro_sanitario;
						  				$fecha_de_caducidad = $fila_encuesta->fecha_de_caducidad;
						  				$sello_de_control = $fila_encuesta->sello_de_control;

						  		}
					  		}
					  		
					  	?>
					  	<tr class="fila-encuesta">
							<td>{{$etiqueta->titulo}}</td>
							<td>{{ Form::text('encuestas_productos_alimenticios[lugar_adquirido][' . $etiqueta->id . ']', $lugar_adquirido, array('class' => 'form-control', 'required' => 'required', 'onkeyup' => 'uncheck_no_aplica(this)')); }}</td>
							<td>{{ Form::text('encuestas_productos_alimenticios[registro_sanitario][' . $etiqueta->id . ']', $registro_sanitario, array('class' => 'form-control', 'required' => 'required', 'onkeyup' => 'uncheck_no_aplica(this)')); }}</td>				
							<td>{{ Form::text('encuestas_productos_alimenticios[fecha_de_caducidad][' . $etiqueta->id . ']', $fecha_de_caducidad, array('class' => 'form-control datepicker','id' => '','data-date-format'=>'yyyy-mm-dd','readonly', 'required' => 'required', 'onkeyup' => 'uncheck_no_aplica(this)')) }}</p></td>
							<td>{{ Form::text('encuestas_productos_alimenticios[sello_de_control][' . $etiqueta->id . ']', $sello_de_control, array('class' => 'form-control', 'required' => 'required', 'onkeyup' => 'uncheck_no_aplica(this)')); }}</td>				
							<td><input {{ $no_aplica }} type="checkbox" class="no-aplica" name="encuestas_productos_alimenticios[no_aplica][{{$etiqueta->id}}]" value="1"></td>
						</tr>
					@endforeach

						 		
				</table>

			<?php } elseif($key == 2){?>
				<table class="table table-bordered table-hover col-lg-12 {{ $class }}" id="opcion-tabla-{{$key}}" > 
					<tr>				
						<th rowspan="2">	
							<h3>{{$opcion}}
						</th>				
						<th colspan="3">
							Frecuencia
						</th>
						<th rowspan="2">
							Fecha última aplicación
						</th>
						<th rowspan="2">
							Fecha a aplicarse
						</th>
						<th colspan="2">
							Cumple
						</th>
						<th rowspan="2">
							No aplica
						</th>
					</tr>		
				  	<tr>
				  		<td>Sem</td>
				    	<td>Men</td>	
				    	<td>Tri</td>		    	
				  		<td>Sí</td>
				    	<td>No</td>		    
				  	</tr>	

				  	@foreach(Etiqueta::getEtiquetasPorPosicion(16)->get() as $etiqueta)
				  		<?php 
					  		$frecuencia_1 = "";
					  		$frecuencia_2 = "";
					  		$frecuencia_3 = "";
					  		$fecha_ultima_aplicacion = "";
					  		$fecha_a_aplicarse = "";
					  		$si_cumple = "";
					  		$no_cumple = "";
					  		$no_aplica = "";
					  		$fila_encuesta = EncuestaManipulacionControlPlaga::where("etiqueta_id", "=", $etiqueta->id)
					  														->where("empresa_id", "=", $empresa->id)->get()->first();
					  		if(isset($fila_encuesta)){
					  			if($fila_encuesta->no_aplica == 1){
					  				$no_aplica = "checked";
					  			} else{
						  				$frecuencia = $fila_encuesta->frecuencia;
						  				$fecha_ultima_aplicacion = $fila_encuesta->fecha_ultima_aplicacion;
						  				$fecha_a_aplicarse = $fila_encuesta->fecha_a_aplicarse;
						  				if($fila_encuesta->cumple == 1)
						  					$si_cumple = "checked";
						  				elseif($fila_encuesta->cumple == 0)
						  					$no_cumple = "checked";
						  				if($fila_encuesta->frecuencia == 1){
							  				$frecuencia_1 = "checked";
							  			}elseif($fila_encuesta->frecuencia == 2){
							  				$frecuencia_2 = "checked";
							  			}elseif($fila_encuesta->frecuencia == 3){
							  				$frecuencia_3 = "checked";
							  			}
						  		}
					  		}
					  		
					  	?>
					  	<tr class="fila-encuesta">
							<td>{{ $etiqueta->titulo }}</td>
							<td><input {{$frecuencia_1}} type="radio" name="control_de_plagas[frecuencia][{{$etiqueta->id}}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
							<td><input {{$frecuencia_2}} type="radio" name="control_de_plagas[frecuencia][{{$etiqueta->id}}]" value="2" required="required" onclick="uncheck_no_aplica(this)"></td>
							<td><input {{$frecuencia_3}} type="radio" name="control_de_plagas[frecuencia][{{$etiqueta->id}}]" value="3" required="required" onclick="uncheck_no_aplica(this)"></td>
							<td>{{ Form::text('control_de_plagas[fecha_ultima_aplicacion]['. $etiqueta->id .']', $fecha_ultima_aplicacion, array('class' => 'form-control datepicker','id' => '','data-date-format'=>'yyyy-mm-dd','readonly', 'onkeyup' => 'uncheck_no_aplica(this)')) }}</p>
											
							</td>
							<td>{{ Form::text('control_de_plagas[fecha_a_aplicarse]['. $etiqueta->id .']', $fecha_a_aplicarse, array('class' => 'form-control datepicker','id' => '','data-date-format'=>'yyyy-mm-dd','readonly', 'onkeyup' => 'uncheck_no_aplica(this)')) }}</p>
							</td>
							<td><input {{$si_cumple}} type="radio" name="control_de_plagas[cumple][{{$etiqueta->id}}]" value="1" required="required"></td>
							<td><input {{$no_cumple}} type="radio" name="control_de_plagas[cumple][{{$etiqueta->id}}]" value="0" required="required"></td>
							<td><input {{$no_aplica}} type="checkbox" name="control_de_plagas[no_aplica][{{$etiqueta->id}}]" class="no-aplica" value="1"></td>
						</tr>
					@endforeach
					
				</table>
			<?php } elseif($key == 3){ ?>
					<div id="opcion-div-{{$key}}" class="opcion-div {{ $class }}" >
						<table class="table table-bordered table-hover col-lg-12" > 
							<tr>				
								<th rowspan="2">	
									<h3>{{$opcion}}
								</th>				
								<th colspan="2">
									Higiene
								</th>
								<th colspan="2">
									Estado
								</th>
								<th colspan="2">
									Adecuado/a
								</th>
								<th colspan="2">
									Funciona
								</th>
								<th colspan="2">
									Mantenimiento
								</th>
								<th rowspan="2">
									No existe				
								</th>
							</tr>		
						  	<tr>
						  		<td>Limpio</td>
						    	<td>Sucio</td>
						    	<td>Bueno</td>
						    	<td>Malo</td>
						    	<td>Si</td>
						    	<td>No</td>
						    	<td>Si</td>
						    	<td>No</td>
						    	<td>Está en</td>
						    	<td>Necesita</td>
						  	</tr>	
						  	@foreach(Etiqueta::getEtiquetasPorPosicion(17)->get() as $etiqueta)
						  		<?php 
							  		$si_esta_limpio = "";
							  		$no_esta_limpio = "";
							  		$es_limpio = "";
							  		$no_es_limpio = "";
							  		$es_adecuado = "";
							  		$no_es_adecuado = "";
							  		$funciona = "";
							  		$no_funciona = "";
							  		$esta_en_mantenimiento = "";
							  		$no_esta_en_mantenimiento = "";
							  		$no_existe = "";
							  		$fila_encuesta = EncuestaManipulacionArea::where("etiqueta_id", "=", $etiqueta->id)
							  														->where("empresa_id", "=", $empresa->id)
							  														->where("codigo_area", "=", Config::get('constants.CODIGOS_AREAS.5'))
							  														->get()->first();
							  		if(isset($fila_encuesta)){
							  			if($fila_encuesta->no_existe == 1){
							  				$no_existe = "checked";
							  			} else{
								  				if($fila_encuesta->esta_limpio == 1)
								  					$si_esta_limpio = "checked";
								  				elseif($fila_encuesta->esta_limpio == 0)
								  					$no_esta_limpio = "checked";
								  				if($fila_encuesta->es_limpio == 1)
								  					$es_limpio = "checked";
								  				elseif($fila_encuesta->es_limpio == 0)
								  					$no_es_limpio = "checked";
								  				if($fila_encuesta->es_adecuado == 1)
								  					$es_adecuado = "checked";
								  				elseif($fila_encuesta->es_adecuado == 0)
								  					$no_es_adecuado = "checked";
								  				if($fila_encuesta->funciona == 1)
								  					$funciona = "checked";
								  				elseif($fila_encuesta->funciona == 0)
								  					$no_funciona = "checked";
								  				if($fila_encuesta->esta_en_mantenimiento == 1)
								  					$esta_en_mantenimiento = "checked";
								  				elseif($fila_encuesta->esta_en_mantenimiento == 0)
								  					$no_esta_en_mantenimiento = "checked";


								  		}
							  		}
							  		
							  	?>
						  		<tr class="fila-encuesta">
									<td>{{ $etiqueta->titulo }}</td>
									<td><input {{$si_esta_limpio}} type="radio" name="area_bar[esta_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_esta_limpio}} type="radio" name="area_bar[esta_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$es_limpio}} type="radio" name="area_bar[es_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_es_limpio}} type="radio" name="area_bar[es_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$es_adecuado}} type="radio" name="area_bar[es_adecuado][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_es_adecuado}} type="radio" name="area_bar[es_adecuado][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$funciona}} type="radio" name="area_bar[funciona][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_funciona}} type="radio" name="area_bar[funciona][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$esta_en_mantenimiento}} type="radio" name="area_bar[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_esta_en_mantenimiento}} type="radio" name="area_bar[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>				
									<td><input {{$no_existe}} type="checkbox" class="no-aplica" name="area_bar[no_existe][{{ $etiqueta->id }}]" value="1"></td>
								</tr>
							@endforeach
									 		
					</table>
					<table class="table table-bordered table-hover col-lg-12">
						<tr>
							<th rowspan="2"></th>				
							<th colspan="2">Cumple</th>
						</tr>
						<tr>
							<td>Si</td>
							<td>No</td>
						</tr>
						@foreach(Etiqueta::getEtiquetasPorPosicion(18)->get() as $etiqueta)
							<?php 
							  		$si_cumple = "";
							  		$no_cumple = "";
							  		
							  		$fila_encuesta = EncuestaManipulacionArea::where("etiqueta_id", "=", $etiqueta->id)
							  														->where("empresa_id", "=", $empresa->id)
							  														->where("codigo_area", "=", Config::get('constants.CODIGOS_AREAS.5'))
							  														->get()->first();
							  		if(isset($fila_encuesta)){
							  			if($fila_encuesta->cumple == 1)
							  				$si_cumple = "checked";
							  			elseif($fila_encuesta->cumple == 0)
							  				$no_cumple = "checked";
							  		}
							  		
							?>
							<tr class="fila-encuesta">
								<td>{{ $etiqueta->titulo }}</td>				
								<td><input {{$si_cumple}} type="radio" name="area_bar[cumple][{{ $etiqueta->id }}]" value="1" required="required"></td>
								<td><input {{$no_cumple}} type="radio" name="area_bar[cumple][{{ $etiqueta->id }}]" value="0" required="required"></td>				
							</tr>
						@endforeach
						
					</table>
				</div>
		<?php } elseif($key == 4){ ?>
					
					<div id="opcion-div-{{$key}}" class="opcion-div {{ $class }}" >
						<table class="table table-bordered table-hover col-lg-12"> 
							<tr>				
								<th rowspan="2">	
									<h3>{{$opcion}}
								</th>				
								<th colspan="2">
									Higiene
								</th>
								<th colspan="2">
									Estado
								</th>
								<th colspan="2">
									Adecuado/a
								</th>
								<th colspan="2">
									Funciona
								</th>
								<th colspan="2">
									Mantenimiento
								</th>
								<th rowspan="2">
									No existe				
								</th>
							</tr>		
						  	<tr>
						  		<td>Limpio</td>
						    	<td>Sucio</td>
						    	<td>Bueno</td>
						    	<td>Malo</td>
						    	<td>Si</td>
						    	<td>No</td>
						    	<td>Si</td>
						    	<td>No</td>
						    	<td>Está en</td>
						    	<td>Necesita</td>
						  	</tr>	
						  	@foreach(Etiqueta::getEtiquetasPorPosicion(19)->get() as $etiqueta)
						  		<?php 
							  		$si_esta_limpio = "";
							  		$no_esta_limpio = "";
							  		$es_limpio = "";
							  		$no_es_limpio = "";
							  		$es_adecuado = "";
							  		$no_es_adecuado = "";
							  		$funciona = "";
							  		$no_funciona = "";
							  		$esta_en_mantenimiento = "";
							  		$no_esta_en_mantenimiento = "";
							  		$no_existe = "";
							  		$fila_encuesta = EncuestaManipulacionArea::where("etiqueta_id", "=", $etiqueta->id)
							  														->where("empresa_id", "=", $empresa->id)
							  														->where("codigo_area", "=", Config::get('constants.CODIGOS_AREAS.6'))
							  														->get()->first();
							  		if(isset($fila_encuesta)){
							  			if($fila_encuesta->no_existe == 1){
							  				$no_existe = "checked";
							  			} else{
								  				if($fila_encuesta->esta_limpio == 1)
								  					$si_esta_limpio = "checked";
								  				elseif($fila_encuesta->esta_limpio == 0)
								  					$no_esta_limpio = "checked";
								  				if($fila_encuesta->es_limpio == 1)
								  					$es_limpio = "checked";
								  				elseif($fila_encuesta->es_limpio == 0)
								  					$no_es_limpio = "checked";
								  				if($fila_encuesta->es_adecuado == 1)
								  					$es_adecuado = "checked";
								  				elseif($fila_encuesta->es_adecuado == 0)
								  					$no_es_adecuado = "checked";
								  				if($fila_encuesta->funciona == 1)
								  					$funciona = "checked";
								  				elseif($fila_encuesta->funciona == 0)
								  					$no_funciona = "checked";
								  				if($fila_encuesta->esta_en_mantenimiento == 1)
								  					$esta_en_mantenimiento = "checked";
								  				elseif($fila_encuesta->esta_en_mantenimiento == 0)
								  					$no_esta_en_mantenimiento = "checked";


								  		}
							  		}
							  		
							  	?>
							  	<tr class="fila-encuesta">
									<td>{{ $etiqueta->titulo }}</td>
									<td><input {{$si_esta_limpio}} type="radio" name="area_comedor[esta_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_esta_limpio}} type="radio" name="area_comedor[esta_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$es_limpio}} type="radio" name="area_comedor[es_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_es_limpio}} type="radio" name="area_comedor[es_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$es_adecuado}} type="radio" name="area_comedor[es_adecuado][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_es_adecuado}} type="radio" name="area_comedor[es_adecuado][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$funciona}} type="radio" name="area_comedor[funciona][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_funciona}} type="radio" name="area_comedor[funciona][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$esta_en_mantenimiento}} type="radio" name="area_comedor[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
									<td><input {{$no_esta_en_mantenimiento}} type="radio" name="area_comedor[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>				
									<td><input {{$no_existe}} type="checkbox" class="no-aplica" name="area_comedor[no_existe][{{ $etiqueta->id }}]" value="1"></td>
								</tr>
								
							@endforeach
						</table>

						<table class="table table-bordered table-hover col-lg-12">
							<tr>
								<th rowspan="2"></th>				
								<th colspan="2">Cumple</th>
							</tr>
							<tr>
								<td>Si</td>
								<td>No</td>
							</tr>
							@foreach(Etiqueta::getEtiquetasPorPosicion(20)->get() as $etiqueta)
								<?php 
							  		$si_cumple = "";
							  		$no_cumple = "";
							  		
							  		$fila_encuesta = EncuestaManipulacionArea::where("etiqueta_id", "=", $etiqueta->id)
							  														->where("empresa_id", "=", $empresa->id)
							  														->where("codigo_area", "=", Config::get('constants.CODIGOS_AREAS.6'))
							  														->get()->first();
							  		if(isset($fila_encuesta)){
							  			if($fila_encuesta->cumple == 1)
							  				$si_cumple = "checked";
							  			elseif($fila_encuesta->cumple == 0)
							  				$no_cumple = "checked";
							  		}
							  		
								?>
								<tr class="fila-encuesta">
									<td>{{ $etiqueta->titulo }}</td>				
									<td><input {{$si_cumple}} type="radio" name="area_comedor[cumple][{{ $etiqueta->id }}]" value="1" required="required"></td>
									<td><input {{$no_cumple}} type="radio" name="area_comedor[cumple][{{ $etiqueta->id }}]" value="0" required="required"></td>				
								</tr>
								
							@endforeach
						</table>
					</div>
					<?php } elseif($key == 5){ ?>
						
						<div id="opcion-div-{{$key}}" class="opcion-div {{ $class }}" >
							<table class="table table-bordered table-hover col-lg-12"> 
								<tr>				
									<th rowspan="2">	
										<h3>{{$opcion}}
									</th>				
									<th colspan="2">
										Higiene
									</th>
									<th colspan="2">
										Estado
									</th>
									<th colspan="2">
										Ordenado
									</th>
									<th colspan="2">
										Adecuado/a
									</th>
									<th colspan="2">
										Funciona
									</th>
									<th colspan="2">
										Mantenimiento
									</th>
									<th rowspan="2">
										No existe				
									</th>
								</tr>		
							  	<tr>
							  		<td>Limpio</td>
							    	<td>Sucio</td>
							    	<td>Bueno</td>
							    	<td>Malo</td>
							    	<td>Si</td>
							    	<td>No</td>
							    	<td>Si</td>
							    	<td>No</td>
							    	<td>Si</td>
							    	<td>No</td>
							    	<td>Está en</td>
							    	<td>Necesita</td>
							  	</tr>	
							  	@foreach(Etiqueta::getEtiquetasPorPosicion(21)->get() as $etiqueta)
							  		<?php 
								  		$si_esta_limpio = "";
								  		$no_esta_limpio = "";
								  		$es_limpio = "";
								  		$no_es_limpio = "";
								  		$es_adecuado = "";
								  		$no_es_adecuado = "";
								  		$funciona = "";
								  		$no_funciona = "";
								  		$esta_en_mantenimiento = "";
								  		$no_esta_en_mantenimiento = "";
								  		$es_ordenado = "";
								  		$no_es_ordenado = "";
								  		$no_existe = "";
								  		$fila_encuesta = EncuestaManipulacionArea::where("etiqueta_id", "=", $etiqueta->id)
								  														->where("empresa_id", "=", $empresa->id)
								  														->where("codigo_area", "=", Config::get('constants.CODIGOS_AREAS.7'))
								  														->get()->first();
								  		if(isset($fila_encuesta)){
								  			if($fila_encuesta->no_existe == 1){
								  				$no_existe = "checked";
								  			} else{
									  				if($fila_encuesta->esta_limpio == 1)
									  					$si_esta_limpio = "checked";
									  				elseif($fila_encuesta->esta_limpio == 0)
									  					$no_esta_limpio = "checked";
									  				if($fila_encuesta->es_limpio == 1)
									  					$es_limpio = "checked";
									  				elseif($fila_encuesta->es_limpio == 0)
									  					$no_es_limpio = "checked";
									  				if($fila_encuesta->es_adecuado == 1)
									  					$es_adecuado = "checked";
									  				elseif($fila_encuesta->es_adecuado == 0)
									  					$no_es_adecuado = "checked";
									  				if($fila_encuesta->funciona == 1)
									  					$funciona = "checked";
									  				elseif($fila_encuesta->funciona == 0)
									  					$no_funciona = "checked";
									  				if($fila_encuesta->esta_en_mantenimiento == 1)
									  					$esta_en_mantenimiento = "checked";
									  				elseif($fila_encuesta->esta_en_mantenimiento == 0)
									  					$no_esta_en_mantenimiento = "checked";
									  				if($fila_encuesta->es_ordenado == 1)
									  					$es_ordenado = "checked";
									  				elseif($fila_encuesta->es_ordenado == 0)
									  					$no_es_ordenado = "checked";


									  		}
								  		}
							  		
							  		?>
							  		
								  	<tr class="fila-encuesta">
										<td>{{ $etiqueta->titulo }}</td>
										<td><input {{$si_esta_limpio}} type="radio" name="area_materiales_limpieza[esta_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$no_esta_limpio}} type="radio" name="area_materiales_limpieza[esta_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$es_limpio}} type="radio" name="area_materiales_limpieza[es_limpio][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$no_es_limpio}} type="radio" name="area_materiales_limpieza[es_limpio][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$es_ordenado}} type="radio" name="area_materiales_limpieza[es_ordenado][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$no_es_ordenado}} type="radio" name="area_materiales_limpieza[es_ordenado][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$es_adecuado}} type="radio" name="area_materiales_limpieza[es_adecuado][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$no_es_adecuado}} type="radio" name="area_materiales_limpieza[es_adecuado][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$funciona}} type="radio" name="area_materiales_limpieza[funciona][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$no_funciona}} type="radio" name="area_materiales_limpieza[funciona][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$esta_en_mantenimiento}} type="radio" name="area_materiales_limpieza[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="1" required="required" onclick="uncheck_no_aplica(this)"></td>
										<td><input {{$no_esta_en_mantenimiento}} type="radio" name="area_materiales_limpieza[esta_en_mantenimiento][{{ $etiqueta->id }}]" value="0" required="required" onclick="uncheck_no_aplica(this)"></td>				
										<td><input {{$no_existe}} type="checkbox" class="no-aplica" name="area_materiales_limpieza[no_existe][{{ $etiqueta->id }}]" value="1"></td>
									</tr>
									
								@endforeach
							</table>
							
							<table class="table table-bordered table-hover col-lg-12">
								<tr>
									<th rowspan="2"></th>				
									<th colspan="2">Cumple</th>
								</tr>
								<tr>
									<td>Si</td>
									<td>No</td>
								</tr>
								@foreach(Etiqueta::getEtiquetasPorPosicion(22)->get() as $etiqueta)
									<?php 
								  		$si_cumple = "";
								  		$no_cumple = "";
								  		
								  		$fila_encuesta = EncuestaManipulacionArea::where("etiqueta_id", "=", $etiqueta->id)
								  														->where("empresa_id", "=", $empresa->id)
								  														->where("codigo_area", "=", Config::get('constants.CODIGOS_AREAS.7'))
								  														->get()->first();
								  		if(isset($fila_encuesta)){
								  			if($fila_encuesta->cumple == 1)
								  				$si_cumple = "checked";
								  			elseif($fila_encuesta->cumple == 0)
								  				$no_cumple = "checked";
								  		}
								  		
									?>
									<tr class="fila-encuesta">
										<td>{{ $etiqueta->titulo }}</td>				
										<td><input {{$si_cumple}} type="radio" name="area_materiales_limpieza[cumple][{{ $etiqueta->id }}]" value="1" required="required"></td>
										<td><input {{$no_cumple}} type="radio" name="area_materiales_limpieza[cumple][{{ $etiqueta->id }}]" value="0" required="required"></td>				
									</tr>
									
								@endforeach
							</table>
						</div>
					<?php } ?>
		@endforeach
	</div>	
</div>
{{ Form::close() }}
<div id="draft-saved" class="feedback-success">
  <p>Borrador grabado automaticamente!</p>
</div>
@stop