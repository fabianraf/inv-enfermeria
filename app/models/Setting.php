<?php

class Setting extends Eloquent {
	protected $guarded = array();
	protected $table = "settings";
	public static $rules = array();

	public static function consumoAlimentosListo(){
		if(Setting::where("nombre", "=", "Mail consumo alimentos")->where("valor", "=", "enviado")->count() == 1)
			return true;
		else
			return false;
	}

	public static function enviaMailConsumoAlimentos($estudiantes_con_encuesta){
		Mail::send('emails.enviar_consumo_alimento', array('estudiantes_con_encuesta' => $estudiantes_con_encuesta), 
			function($message) {
		    $message->to('sivan.promocion@gmail.com', 'Dr. Edgar Rojas')
		    ->replyTo('sivan.promocion@gmail.com', 'Sivan Promoción')
		    ->subject('Se han completado las encuestas de Consumo Habitual!');
		});
	}


}
