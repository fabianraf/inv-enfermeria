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
	
	
	$(".tipo-alimento").click(function(){
		if($(this).hasClass("btn-info")){
			//No hace nada
		} else{
			$(".tipo-alimento").each(function(){
				$(this).removeClass("btn-info");
			});
		}
		$(this).addClass("btn-info");
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

var autosave = window.setInterval("autosaveForm()", 120000);

function autosaveForm() {
		$('#encuesta_consumo_alimentos_universidad').submit(function(){
			$.post('/encuesta_consumo_alimentos', $('#encuesta_consumo_alimentos_universidad').serialize());
			return false;
		});
    $('#encuesta_consumo_alimentos_universidad').submit();
		$('#draft-saved').show();
		setTimeout("$('#draft-saved').hide()", 7000);

		$('#encuesta_consumo_alimentos_bares').submit(function(){
			$.post('/encuesta_consumo_alimentos_bares', $('#encuesta_consumo_alimentos_bares').serialize());
			return false;
		});
    $('#encuesta_consumo_alimentos_bares').submit();
		$('#draft-saved').show();
		setTimeout("$('#draft-saved').hide()", 7000);

  
}