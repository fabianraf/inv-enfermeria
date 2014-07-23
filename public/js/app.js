$(document).ready(function() {

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
	
	
	//Cambia colores a los botones
	$(".tipo-alimento").click(function(){
		revisar_si_esta_completo();
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".tipo-alimento").each(function(){
				$(this).removeClass("btn-info");
			});
		}
		$(this).attr("class", "btn btn-default tipo-alimento btn-info btn-striped");
		
	});
	
	//Fin de cambiar colores a los botonoes

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
		setTimeout("$('#draft-saved').hide()", 7000);
		return false;
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