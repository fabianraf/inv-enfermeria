$(document).ready(function() {
	if($('.clockpicker').length > 0 )
		$('.clockpicker').clockpicker();
	if($('.datepicker').length > 0 )
		$( ".datepicker" ).datepicker();
	//Add any jquery code here. It will be loaded at the end of the page   
	$("#crear-tipo-de-alimentos").submit(function(){
		var message = "";
		//We use ajax for this call
		$.ajax({
           type: $(this).attr("method"),
           url: $(this).attr("action"),
           data: $(this).serialize(), // serializes the form's elements.
					 success: function(data)
           {
						 	 console.log(data);	
						 	 $("#crear-tipo-de-alimentos")[0].reset();
               message = '<h3>El tipo de alimento fue creado exitosamente!</h3><br/>';
							 $('#messageExplanation').html(message);
							 $('.table tr:last').after(data);
           },
	         error: function(jqXHR, textStatus, errorThrown) {
	           jqXHR.responseText;
						 var response = jQuery.parseJSON(jqXHR.responseText);
	           message = '<h3>Por favor llenar el siguiente campo:</h3><ul>';
	           $.each(response, function(index, element) {
	             message += '<li>' + element + '</li>';
	           });
	           message += '</ul>'
	           $('#messageExplanation').html(message);
	         }
         });

    return false;
	});
	
	
	//Cambia colores a los botones de las encuestas
	$(".tipo-alimento").click(function(){
		revisar_si_esta_completo();
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".tipo-alimento").each(function(){
				$(this).addClass("btn-info");
			});
		}
		$(this).attr("class", "btn btn-default tipo-alimento btn-info btn-striped");
		
	});


	//Cambia colores a los botones de la gestion de alimentos
	$(".gestion-alimentos").click(function(){		
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".gestion-alimentos").each(function(){
				$(this).removeClass("btn-info");
				$(this).addClass("btn-success")
			});
		}
		$(this).attr("class", "btn btn-default gestion-alimentos btn-info btn-striped");
		
	});

	//Cambia colores a los botones de la gestion de alimentos_bares
	$(".gestion-alimentos-bares").click(function(){		
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".gestion-alimentos-bares").each(function(){
				$(this).removeClass("btn-info");
				$(this).addClass("btn-success")
			});
		}
		$(this).attr("class", "btn btn-default gestion-alimentos-bares btn-info btn-striped");
		
	});


	//Cambia colores a los botones de la gestion de usuarios
	$(".gestion-perfiles").click(function(){		
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".gestion-perfiles").each(function(){
				$(this).removeClass("btn-info");
				$(this).addClass("btn-success")
			});
		}
		$(this).attr("class", "btn btn-default gestion-perfiles btn-info btn-striped");
		
	});	
	

	$(".encabezado-pregunta").click(function(){
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".encabezado-pregunta").each(function(){
				$(this).removeClass("btn-info");
			});
		}
		$(this).addClass("btn-info");
	});
	
	//Frecuencia de consumo de alimentos en la Universidad y alrededores
	$('#encuesta_consumo_alimentos_universidad').submit(function(){
		$.post('/encuesta_consumo_alimentos', $('#encuesta_consumo_alimentos_universidad').serialize());
		$('#draft-saved').show();
		revisar_si_esta_completo();
		setTimeout("$('#draft-saved').hide()", 7000);
		return false;
	});
	
	//Frecuencia de consumo de alimentos en los bares de la Universidad
	$('#encuesta_consumo_alimentos_bares').submit(function(){
		$.post('/encuesta_consumo_alimentos_bares', $('#encuesta_consumo_alimentos_bares').serialize());
		$('#draft-saved').show();
		revisar_si_esta_completo();
		setTimeout("$('#draft-saved').hide()", 7000);
		return false;
	});

	//Obtener alumnos randomicamente para consumo habitual
	$("#obtener_alumno").click(function(){
		$.get('/obtener_alumno_randomicamente', function( data ) {
			$("#nombre_alumno").val(data["nombre"] + " " + data["apellido"])
			$("#alumno_id").val(data["id"]);
		});
	});

	//FIXME: Esta funcion deberia buscar el id del estudiante de acuerdo al nombre ingresado
	$("#nombre_alumno").focusout(function(){
		// $.get('/obtener_alumno_randomicamente', function( data ) {
		// 	$("#nombre_alumno").val(data["nombre"] + " " + data["apellido"])
		// 	$("#alumno_id").val(data["id"]);
		// });
	});

	//Oculta y Muestra los campos para los tiempos de consumo habitual
	$(".tiempo").click(function(){
		var nombre_id = $(this).attr("id");
		console.log(nombre_id);
		$(".tiempo").each(function(){
			var id_interno = $(this).attr("id");
			$(this).removeClass("btn-info");
			$(this).addClass("btn-success");
			$("#" + id_interno + "-id").addClass("hidden");
		});
		$(this).addClass("btn-info");
		$("#" + nombre_id + "-id").removeClass("hidden");
	});

	//Valida campos para consumo habitual
	$("#form-consumo-habitual").submit(function(){
		var mensaje = "";
		var error = false;
		if($("#alumno_id").val() == ""){
			error = true;
			if($("#alumno-error").length < 1)
				mensaje += "<div class='alert alert-warning' id='alumno-error'><a href='#' class='close' data-dismiss='alert'>&times;</a>Se debe seleccionar un alumno.</a></div>"; 
		}else{
			if($("#alumno-error").length > 0){
				$("#alumno-error").remove();
			}
		}

		if($("#nombre-alimento-desayuno-1").val() == ""){
			error = true;
			if($("#desayuno-error").length < 1)
				mensaje += "<div class='alert alert-warning' id='desayuno-error'><a href='#' class='close' data-dismiss='alert'>&times;</a>Se debe ingresar un alimento para el desayuno.</a></div>";
		}
		else{
			if($("#desayuno-error").length > 0){
				$("#desayuno-error").remove();
			}
		}
		if($("#nombre-alimento-media_manana-1").val() == ""){
			error = true;
			if($("#media-manana-error").length < 1)
				mensaje += "<div class='alert alert-warning' id='media-manana-error'><a href='#' class='close' data-dismiss='alert'>&times;</a>Se debe ingresar un alimento para la media mañana.</a></div>";
		}
		else{
			if($("#media-manana-error").length > 0){
				$("#media-manana-error").remove();
			}
		}
		if($("#nombre-alimento-almuerzo-1").val() == ""){
			error = true;
			if($("#almuerzo-error").length < 1)
				mensaje += "<div class='alert alert-warning' id='almuerzo-error'><a href='#' class='close' data-dismiss='alert'>&times;</a>Se debe ingresar un alimento para el almuerzo.</a></div>";
		}
		else{
			if($("#almuerzo-error").length > 0){
				$("#almuerzo-error").remove();
			}
		}
		if($("#nombre-alimento-media_tarde-1").val() == ""){
			error = true;
			if($("#media-tarde-error").length < 1)
				mensaje += "<div class='alert alert-warning' id='media-tarde-error'><a href='#' class='close' data-dismiss='alert'>&times;</a>Se debe ingresar un alimento para la media tarde.</a></div>";
		}
		else{
			if($("#media-tarde-error").length > 0){
				$("#media-tarde-error").remove();
			}
		}
		if($("#nombre-alimento-merienda-1").val() == ""){
			error = true;
			if($("#merienda-error").length < 1)
				mensaje += "<div class='alert alert-warning' id='merienda-error'><a href='#' class='close' data-dismiss='alert'>&times;</a>Se debe ingresar un alimento para la merienda.</a></div>";
		}
		else{
			if($("#merienda-error").length > 0){
				$("#merienda-error").remove();
			}
		}
		if(error == true){
			$("#mensajes").append(mensaje);
			return false;
		}
	});
	
	//Control de higiene del personal de bares y comedores de la PUCE
	$("#crear_encuesta_control_higiene_personal").submit(function(){
		$.ajax({
           	type: $(this).attr("method"),
           	url: $(this).attr("action"),
           	data: $(this).serialize(), // serializes the form's elements.
			success: function(data)
	           {
	           	console.log(data);
	           	var mensaje = "";
				if(data['error'] == true){
					
					var response = jQuery.parseJSON(data['mensajes']);
					$.each(response, function(index, element) {
						mensaje += "<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert'>&times;</a>" + element + "</a></div>";
		           });
				}
				else{
					mensaje += "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert'>&times;</a>Empleado Guardado exitosamente!</a></div>";
					$("#grabar-encuesta").remove();
				}
				$("#errores").html(mensaje);
	           }
         });
		return false;
	});

	//Anadir empleado en Control de higiene del personal de bares y comedores de la PUCE
	$("#anadir-nuevo-empleado").click(function(){
		location.reload(true);
	});

	//Autocompletado de estudiantes
	$(function(){
		$( "#nombre_alumno" ).autocomplete({
			source: "search/autocomplete",
			minLength: 1,
			select: function(event, ui) {
			$('#nombre_alumno').val(ui.item.value);
			$('#alumno_id').val(ui.item.id);
			}
		});
	});



	
}); 


function submit_tipo_de_alimento(tipo_de_alimento_id){
	$(".table-bordered").each(function(){
		if($(this).attr("id") == "tipo-alimento-" + tipo_de_alimento_id){
			$(this).removeClass("hidden");
		}else{
			$(this).addClass("hidden");
		}
	});	
}

function submit_tipo_de_alimento_bares(tipo_de_alimento_bares_id){
	$(".table-bordered").each(function(){
		if($(this).attr("id") == "tipo-alimento-bares-" + tipo_de_alimento_bares_id){
			$(this).removeClass("hidden");
		}else{
			$(this).addClass("hidden");
		}
	});	
}

function submit_encabezado_pregunta(encabezado_pregunta_id){
	$(".table-bordered").each(function(){
		if($(this).attr("id") == "encabezado-pregunta-" + encabezado_pregunta_id){
			$(this).removeClass("hidden");
		}else{
			$(this).addClass("hidden");
		}
	});
}

function revisar_si_esta_completo(){
			for(var i = 0; i < 18; i++){
				var names = {};
		    var count = 0;
				var count_names = 0;
				
		    $("#tipo-alimento-" + i + " :radio").each(function() {
		        names[$(this).attr('name')] = true;
		    });
		    
				//Itera cada alimento de acuerdo a su nombre. Ej: frecuencia[15]
		    $.each(names, function(name, value) { 
					count_names++;
						if($('[name="' + name + '"]').is(':checked'))
							count++;
		    });
				//Asigna la clase de completo
				if($("#boton-tipo-alimento-" + i).hasClass('btn-info'))
					btn_class = " btn-info"
				else
					btn_class = "";
		    if (count_names == count) {
					// if($("#boton-tipo-alimento-" + i).hasClass('btn-info'))
						$("#boton-tipo-alimento-" + i).attr("class", "btn btn-default tipo-alimento  btn-success btn-striped" + btn_class);
					
		    } else{
						$("#boton-tipo-alimento-" + i).attr("class", "btn btn-default tipo-alimento btn-danger btn-striped");
					
		    }
			}
	
}

// var autosave = window.setInterval("autosaveForm()", 15000); //Para probar, 15 segundos
var	autosave = window.setInterval("autosaveForm()", 120000); //Dos minutos
		
function autosaveForm() {
		if($('#encuesta_consumo_alimentos_universidad').length > 0)
			$('#encuesta_consumo_alimentos_universidad').submit();
		
		if($('#encuesta_consumo_alimentos_bares').length > 0)
			$('#encuesta_consumo_alimentos_bares').submit();
		
  
}

function anadir_alimento(tipo){
	clonned_row = $("." + tipo + "-row:last").clone();
	siguiente_id = parseInt($("#numero_de_preparaciones_" + tipo).val());
	console.log(siguiente_id);
	$("#numero_de_preparaciones_" + tipo).val(siguiente_id + 1);
	$("." + tipo + "-row:last").after(clonned_row);
	$("." + tipo + "-row:last").find(".col-sm-6.col-lg-2.nombre-alimento").children(".small").attr("name", "nombre_alimento_" + tipo + "_" + siguiente_id).val("");
	$("." + tipo + "-row:last").find(".col-sm-6.col-lg-1.forma-de-coccion").children(".small-select").attr("name", "forma_de_coccion_" + tipo + "_" + siguiente_id).val("");
	$("." + tipo + "-row:last").find(".col-sm-6.col-lg-1.cantidad").children(".small").attr("name", "cantidad_" + tipo + "_" + siguiente_id).val("");
	$("." + tipo + "-row:last").find(".col-sm-6.col-lg-1.porciones").children(".small").attr("name", "porciones_" + tipo + "_" + siguiente_id).val("");
	$("." + tipo + "-row:last").find(".col-sm-6.col-lg-1.grupo-de-alimentos").children(".small-select").attr("name", "grupo_alimento_" + tipo + "_" + siguiente_id).val("");
	$("." + tipo + "-row:last").find(".col-sm-6.col-lg-2.ingredientes").children(".small").each(function(){
		$(this).attr("name", "ingredientes_" + tipo + "_" + siguiente_id + "[]");
	});
	activar_tags();
}
function anadir_ingrediente(objeto){
	var jQueryItem = $(objeto);
	ingrediente_clonado = jQueryItem.prev().clone().val("");
	jQueryItem.before(ingrediente_clonado);
	activar_tags();
}

function activar_tags(){
	var alimentos;
	var availableTags = [];
	$.ajax({
           type: 'GET',
           url: '/obtener_alimentos',
           dataType: "json",
           success: function(data)
           {
           	for(var i = 0; i < data.length; i++) {
			    var obj = data[i];
			    availableTags.push(obj.nombre);
			}
           },
	         error: function(jqXHR, textStatus, errorThrown) {
	        	//Si ocurre un error 
	         },
	        async: false
         });
	
	$( ".tags" ).autocomplete({
		source: availableTags
	});
}

function submit_gestion_perfiles(perfil_id){
	$("#perfil_id").val(perfil_id);
	$(".table-no-border").each(function(){
		if($(this).attr("id") == "perfil-" + perfil_id){
			$(this).removeClass("hidden");
		}else{
			$(this).addClass("hidden");
		}
	});	
}


function submit_gestion_alimentos(tipo_de_alimento_id){
	$("#tipo_de_alimento_id").val(tipo_de_alimento_id);
	$(".table-no-border").each(function(){
		if($(this).attr("id") == "tipo-alimento-" + tipo_de_alimento_id){
			$(this).removeClass("hidden");
		}else{
			$(this).addClass("hidden");
		}
	});	
}

function submit_gestion_alimentos_bares(tipo_de_alimento_bares_id){
	$("#tipo_de_alimento_bares_id").val(tipo_de_alimento_bares_id);
	$(".table-no-border").each(function(){
		if($(this).attr("id") == "tipo-alimento-bares-" + tipo_de_alimento_bares_id){
			$(this).removeClass("hidden");
		}else{
			$(this).addClass("hidden");
		}
	});	
}

function cUpper(cObj)
{
	cObj.value=cObj.value.toUpperCase();
}


