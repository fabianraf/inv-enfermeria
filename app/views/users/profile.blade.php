@extends('layouts.default')

	
@section('content')


<?php 
if (Auth::user()->perfiles_usuario_id == "2" && !$user->acepto_disclaimer){
?>
	{{ Form::open(array('url' => 'disclaimer')) }}
	<h2 align="center">Pontificia Universidad Católica del Ecuador</h2>
	<h3 align="center">Facultad de Enfermería</h3>
	<h3 align="center">Carrera de Nutrición Humana</h3><br><br>
	<h3 align="center">CONSENTIMIENTO INFORMADO PARA LA PARTICIPACIÓN EN EL ESTUDIO</h3>
	<h3 align="center">TITULO: 	Implementación de un Sistema de Vigilancia Alimentaria y Nutricional para los 
	estudiantes de la PUCE</h3><br><br>
	<p align="justify"”>
		I. INTRODUCCIÓN: La Facultad de Enfermería, conjuntamente con el departamento de Promoción de la salud de la 
		Dirección General de Estudiantes y la Dirección General Administrativa se encuentran ejecutando un proyecto de 
		investigación, ejecutado por los docentes de la facultad, con la finalidad de Validar un Sistema de vigilancia 
		alimentaria y nutricional, que permitirá conocer el estado nutricional y de salud de los estudiantes de la PUCE 
		y en forma piloto de la Facultad de Enfermería. Usted ha sido invitado a participar en este estudio, por lo que 
		antes de que decida participar por favor lea este consentimiento. Asegúrese de los riesgos y beneficios.<br><br>
		II. PROPÓSITO DEL ESTUDIO: Implementar un sistema de vigilancia alimentaria nutricional para los estudiantes 
		de la PUCE<br><br>
		III. PARTICIPANTES DEL ESTUDIO: Estudiantes de la PUCE de la Facultad de Enfermería.<br><br>
		IV. PROCEDIMIENTOS: Se aplicará las siguientes herramientas para la recolección de información:
		<ul type = circle>
			<li>Frecuencia de consumo alimentario (llenado virtual en la web mediante la aceptación de su participación)
			<li>Medidas antropométricas (únicamente se convocará a una muestra de los respondientes)
			<li>Alimentación habitual (en forma aleatoria a una sub-muestra de los respondientes)
			<li>Exámenes bioquímicos (en forma aleatoria a la misma sub-muestra de alimentación habitual)
		</ul>
		No interrumpirá sus actividades normales.<br><br>
		V. RIESGOS O INCOMODIDADES: Para la aplicación de los cuestionarios de frecuencia de consumo necesitamos nos 
		dé una hora de su tiempo para entregarnos la información que se le solicite, esta información podrá llenarse 
		en varios periodos de tiempo y se guardara cada 2 minutos.<br><br>
		Posteriormente le convocaremos a una sesión de medición antropométrica que incluye peso, talla, circunferencias 
		de cintura y cadera y de ser seleccionado en la sub-muestra le solicitaremos acuda a DiserLab de la PUCE para 
		que nos dé una muestra de sangre para unos análisis bioquímicos.<br><br>
		VI. BENEFICIOS: Se conocerá el estado nutricional y de salud de los estudiantes, y el comportamiento 
		alimentario que afecta en este, así como lo que más se consume en los bares universitarios.<br><br>
		VII. COSTOS: No hay ningún costo por su participación.<br><br>
		VIII. INCENTIVO PARA EL PARTICIPANTE: Contribuir al conocimiento de los principales problemas nutricionales 
		de la comunidad universitaria y del conocimiento de su situación de salud en particular.<br><br>
		X. PRIVACIDAD Y CONFIDENCIALIDAD: Si elige colaborar con este estudio, el investigador recolectará sus datos 
		personales. La información sobre los mismos será mantenida de manera confidencial como lo establece la ley.<br><br>
		La información puede ser revisada por el Comité de Ética de la Pontificia Universidad Católica del Ecuador, 
		quienes realizarán sus correcciones independientemente del criterio del autor de la investigación, basados 
		en los requisitos y regulaciones de la institución académica.<br><br>
		Los resultados de esta investigación pueden ser publicados en revistas científicas o ser presentados en las 
		reuniones científicas, pero su identidad no será divulgada.<br><br>
		XI. COMPENSACIÓN EN CASO DE DAÑO: No se prevé daño físico o mental por la aplicación de las evaluaciones 
		nutricionales y dietéticas.<br><br>
		XII. PARTICIPACIÓN Y RETIRO VOLUNTARIOS: La  participación en este estudio es voluntaria. Usted puede 
		decidir no participar o retirarse del estudio en cualquier momento. De ser necesario, su participación en 
		este estudio puede ser detenida en cualquier momento por el investigador sin su consentimiento.<br><br>
		XIII. FONDOS PARA PAGAR EL ESTUDIO: PUCE<br><br>
		XIV. PREGUNTAS: Si usted tiene alguna pregunta sobre sus derechos como participante del estudio, usted puede 
		contactar a la PUCE, Facultad de Enfermería al 2991 700 ext 1616, Dr. Edgar Rojas González – Investigador 
		Principal del proyecto.<br><br>
		XV. CONSENTIMIENTO:	He leído la información de esta hoja.<br><br>
		Yo autorizo el uso y la divulgación de mi información a las entidades antes mencionadas para los propósitos 
		descritos anteriormente.<br><br>
		Al confirmar la hoja de consentimiento adjunta, no se ha renunciado a ninguno de los derechos legales.<br>
	</p”><br><br>
	<div>
	<input type="radio" name="disclaimer" value="SI"><b>ACEPTO</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="disclaimer" value="NO"><b>NO ACEPTO</b>
	<br><br><input type="submit" value="CONTINUAR" class="btn btn-success"></button></a>		
	</div>
	{{ Form::close() }}

<?php 
}else{
?>
	
	<div class="col-lg-12">
		<h2>Información personal
		<div class="pull-right">
    	<a href="{{{ URL::to('/edit') }}}"><input type="button" value="EDITAR PERFIL" class="btn btn-primary"></button></a>    
	</div></h2>
		<hr></br>

		<div class="row">
			<div class="col-md-4 col-lg-5" >
				<ul type = square>
					<p><li><strong>Email: </strong>{{ $user->email }}</p>
					<p><li><strong>Nombre: </strong>{{ $user->nombre.' '. $user->apellido}}</p>
					<p><li><strong>Cédula: </strong>{{ $user->cedula }}</p>
					<p><li><strong>Dirección: </strong>{{ $user->direccion }}</p>
					<p><li><strong>Teléfono: </strong>{{ $user->telefono }}</p>
					<p><li><strong>Fecha de nacimiento: </strong>{{ $user->fecha_nacimiento }}</p>
					<p><li><strong>Género: </strong>{{ $user->genero }}</p>     
					<p><li><strong>Con quien vives?: </strong>{{ $user->personas_hogar }}</p><br>
				</ul>			
			</div>			
		</div>
	</div>
<?php
	}
?>
@stop
	