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
});   