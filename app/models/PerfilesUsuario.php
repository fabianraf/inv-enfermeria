<?php

class PerfilesUsuario extends Eloquent {
	protected $guarded = array();
	protected $table = "perfiles_usuario";
	public static $rules = array();


	public function usuarios()
	{
		return $this->hasMany('User', 'perfiles_usuario_id');
	}


}
