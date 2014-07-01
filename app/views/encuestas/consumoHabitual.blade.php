@extends('layouts.default')
	
@section('content')

{{ Form::open(array('url' => 'encuesta_consumo_alimentos')) }}
<div class="col-lg-12">
	<h2>Consumo habitual de alimentos
		<div class="pull-right">
			<input type="submit" value="GRABAR" class="btn btn-success">
			<input type="button" value="LIMPIAR" class="btn btn-warning">
		</div>
	</h2>
	<hr>	
	</br>	
	<div class="col-lg-12">
		<table class="table table-bordered col-lg-12" id="tipo-alimento"> 

			<tr>
				
				<th>
					Tiempo de comida
				</th>
				<th>
					Horario
				</th>
				<th>
					Lugar
				</th>
				<th>
					Gasto diario
				</th>
				<th>
					Preparacion/alimento
				</th>				
				<th>
					Ingredientes
				</th>
				<th>
					Forma de cocción
				</th>
				<th>
					Imagen
				</th>
				<th>
					Num. porciones
				</th>				
			</tr>
		
		  <tr>
		  	<td>
		      Desayuno
		    </td>
		    <td>{{Form::text('horario', Input::old('horario'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Casa</option>
					<option>Restaurante</option>
					<option>Tienda</option>
					<option>Cafeteria</option>
					<option>Bar</option>
					<option>Comedor</option>
				</select>
		    </td>
		    <td>{{Form::text('gasto', Input::old('gasto'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					
				</select>
		    </td>
		    <td>
				<select>
					
				</select>
		    </td>		    
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Cocido</option>
					<option>Estofado</option>
					<option>Frito</option>
					<option>Al Horno</option>
					<option>A la plancha</option>
					<option>Al vapor</option>
				</select>
		    </td>
		    <td></td>		    
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</td>		    		    
		  </tr>

		  <tr>
		  	<td>
		      Media Mañana
		    </td>
		    <td>{{Form::text('horario', Input::old('horario'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Casa</option>
					<option>Restaurante</option>
					<option>Tienda</option>
					<option>Cafeteria</option>
					<option>Bar</option>
					<option>Comedor</option>
				</select>
		    </td>
		    <td>{{Form::text('gasto', Input::old('gasto'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					
				</select>
		    </td>
		    <td>
				<select>
					
				</select>
		    </td>		    
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Cocido</option>
					<option>Estofado</option>
					<option>Frito</option>
					<option>Al Horno</option>
					<option>A la plancha</option>
					<option>Al vapor</option>
				</select>
		    </td>
		    <td></td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</td>		    		    
		  </tr>

		  <tr>
		  	<td>
		      Almuerzo
		    </td>
		    <td>{{Form::text('horario', Input::old('horario'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Casa</option>
					<option>Restaurante</option>
					<option>Tienda</option>
					<option>Cafeteria</option>
					<option>Bar</option>
					<option>Comedor</option>
				</select>
		    </td>
		    <td>{{Form::text('gasto', Input::old('gasto'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					
				</select>
		    </td>
		    <td>
				<select>
					
				</select>
		    </td>		    
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Cocido</option>
					<option>Estofado</option>
					<option>Frito</option>
					<option>Al Horno</option>
					<option>A la plancha</option>
					<option>Al vapor</option>
				</select>
		    </td>
		    <td></td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</td>		    	    
		  </tr>

		  <tr>
		  	<td>
		      Media Tarde
		    </td>
		    <td>{{Form::text('horario', Input::old('horario'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Casa</option>
					<option>Restaurante</option>
					<option>Tienda</option>
					<option>Cafeteria</option>
					<option>Bar</option>
					<option>Comedor</option>
				</select>
		    </td>
		    <td>{{Form::text('gasto', Input::old('gasto'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					
				</select>
		    </td>
		    <td>
				<select>
					
				</select>
		    </td>		    
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Cocido</option>
					<option>Estofado</option>
					<option>Frito</option>
					<option>Al Horno</option>
					<option>A la plancha</option>
					<option>Al vapor</option>
				</select>
		    </td>
		    <td></td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</td>		    		    
		  </tr>

		  <tr>
		  	<td>
		      Merienda
		    </td>
		    <td>{{Form::text('horario', Input::old('horario'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Casa</option>
					<option>Restaurante</option>
					<option>Tienda</option>
					<option>Cafeteria</option>
					<option>Bar</option>
					<option>Comedor</option>
				</select>
		    </td>
		    <td>{{Form::text('gasto', Input::old('gasto'), array('class'=>'form-control'))}}</td>
		    <td>
				<select>
					
				</select>
		    </td>
		    <td>
				<select>
					
				</select>
		    </td>		    
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>Cocido</option>
					<option>Estofado</option>
					<option>Frito</option>
					<option>Al Horno</option>
					<option>A la plancha</option>
					<option>Al vapor</option>
				</select>
		    </td>
		    <td></td>
		    <td>
				<select>
					<option>--Seleccione--</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</td>		    		    
		  </tr>	 	
		</table>
	</div>
</div>
{{ Form::close() }}
@stop