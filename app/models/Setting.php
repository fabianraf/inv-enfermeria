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

	public static function enviaMailConsumoAlimentos(){
		Mail::send('emails.enviar_consumo_alimento', [], function($message) {
		    $message->to('fabianraf@gmail.com', 'Fabian Aguirre')
		    ->replyTo('sivan.promocion@gmail.com', 'Sivan Promoción')
		    ->subject('Se han completado las encuestas de Consumo Habitual!');
		});
	}
}
