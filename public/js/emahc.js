$(document).ready(function(){
	$(".no-aplica").each(function(){
		if($(this).is(':checked')){
			$(this).parent().parent("tr").find("input").each(function(){
				if($(this).hasClass('no-aplica')){
				} else{
					if($(this).is(":checkbox") || $(this).is(":radio"))
						$(this).attr("checked", false);
					else	
						$(this).val("");
					$(this).removeAttr("required");
				}
			 });
			
		}
	});
	check_if_other_tabs_are_ready(0);

	$(".no-aplica").click(function(){
		var jcheckbox = $(this);
		if($(this).is(':checked')){
			$(this).parent().parent("tr").find("input").each(function(){
				if($(this).hasClass('no-aplica')){
				} else{
					if($(this).is(":checkbox") || $(this).is(":radio"))
						$(this).attr("checked", false);
					else	
						$(this).val("");
					$(this).removeAttr("required");
				}
			 });
			
		} else {
			$(this).parent().parent("tr").find("input").each(function(){
				if($(this).hasClass('no-aplica')){
				} else{
					
					$(this).attr("required", "required");
				}
			 });
		}
	});
});


function uncheck_no_aplica(this_object){
	var jobject = $(this_object);
	$(jobject).parent().parent("tr").find("input").each(function(){
		if($(this).hasClass('no-aplica')){
		} else{
			
			$(this).attr("required", "required");
		}
	 });
	jobject.parent().parent("tr").find(".no-aplica").attr("checked", false);
}


function submit_emahc(key_id){
	//Se pinta azul de acuerdo a la seleccion
	$(".opcion").each(function(){
		if($(this).attr("id") == "opcion-" + key_id){
			$(this).addClass("btn-info");
			$(this).removeClass("btn-danger");
		}
		else{
			if($(this).hasClass("btn-info") && !$(this).hasClass("btn-danger")){
				$(this).removeClass("btn-info");
				$(this).addClass("btn-danger");
			}
		}
	});

	$(".table-bordered").each(function(){
			if($(this).hasClass("hidden")){
				//No hago nada
			} else{
					$(this).addClass("hidden");
				}
		});
	$(".opcion-div").each(function(){
		if($(this).hasClass("hidden")){
			//No hago nada
		} else{
				$(this).addClass("hidden");
			}
	});
	if(key_id < 3){
		$("#opcion-tabla-" + key_id).removeClass("hidden");
	} else{
		$("#opcion-div-" + key_id).removeClass("hidden");
		$("#opcion-div-" + key_id + " .table-bordered").each(function(){
			$(this).removeClass("hidden");
		});
	}

	check_if_other_tabs_are_ready(key_id);
	
}

 function check_if_other_tabs_are_ready(key_id){
 	
 		for(var i = 0; i < 3; i ++){
 			if($("#opcion-tabla-" + key_id).attr("id") != $("#opcion-tabla-" + i).attr("id")){
 				var counter = 0;
	 			$("#opcion-tabla-" + i + " input").each(function(){
	 				var name = $(this).attr("name");
	 				if($(this).attr("required")){
 						if(($(this).is(":checkbox") || $(this).is(":radio")) && $('#opcion-tabla-' + i + ' input[name="' + name + '"]:checked').length > 0 ){
	 						}
		 					else if((!$(this).is(":checkbox") && !$(this).is(":radio")) && ($(this).is("input:text") && $(this).val() != "" )){
		 					} else{
		 						counter++;	
		 					
		 					}

 					}else{
 						//No haga nada	 
	 				}
	 				 
	 			});
	 			
	 			if(counter == 0){
	 				$("#opcion-" + i).removeClass("btn-danger");
	 				$("#opcion-" + i).addClass("btn-success");
	 			} else {
	 				$("#opcion-" + i).removeClass("btn-success");
	 				$("#opcion-" + i).addClass("btn-danger");
	 			}
 			}
 			
 		}
 			for(var i = 3; i < 8; i ++){
 				if($("#opcion-div-" + key_id).attr("id") != $("#opcion-div-" + i).attr("id")){
 					console.log(i);
 					var counter = 0;
		 			$("#opcion-div-" + i + " input").each(function(){
		 				var name = $(this).attr("name");
		 				if($(this).attr("required")){
	 						if(($(this).is(":checkbox") || $(this).is(":radio")) && $('#opcion-div-' + i + ' input[name="' + name + '"]:checked').length > 0 ){
		 						}
			 					else if((!$(this).is(":checkbox") && !$(this).is(":radio")) && ($(this).is("input:text") && $(this).val() != "" )){
			 					} else{
			 						counter++;	
			 					
			 					}

	 					}else{
	 						//No haga nada	 
		 				}
		 				 
		 			});
		 			// if(key_id == 7)
		 				// console.log(counter);
		 			if(counter == 0){
		 				$("#opcion-" + i).removeClass("btn-danger");
		 				$("#opcion-" + i).addClass("btn-success");
		 			} else {
		 				$("#opcion-" + i).removeClass("btn-success");
		 				$("#opcion-" + i).addClass("btn-danger");
		 			}
 				}
 			}
 		
 }








