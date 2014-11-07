<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	
	protected $fillable = array('email', 'password');

	protected $guarded = array('id');

	public static $rules = array(
	    'personas_hogar'=>'required'
	    );
			
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	

	
	
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
	
	public function encuestaAlimentosUniversidad()
	{
		return $this->hasMany('EncuestaAlimentosUniversidad', 'usuario_id');
	}
	

	//======================
	//****************************************
	//
	//
	// Frecuencia de consumo de alimentos en la Universidad y alrededores
	//
	//
	//======================
	//****************************************
	public function totalDeAlimentosPorTipoEncuestaAlimentosUniversidad($tipo_de_alimento)
	{
		//tipo_de_alimento_completo = 1 significa VERDADERO. 0 significa FALSO
		$tipo_de_alimento_completo = 1;
		foreach($tipo_de_alimento->alimentos as $alimento){
			$encuesta = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->where("alimento_id", "=", $alimento->id)->first();
			if(isset($encuesta)){
				continue;
			}else{
				$tipo_de_alimento_completo = 0;
			}
		}
				
		
		return $tipo_de_alimento_completo;
	}


	//======================
	//****************************************
	//
	//
	// Frecuencia de consumo de alimentos en los bares de la Universidad 
	//
	//
	//======================
	//****************************************
	public function totalDeAlimentosPorTipoEncuestaAlimentosBaresDeLaUniversidad($tipo_de_alimento)
	{
		//tipo_de_alimento_completo = 1 significa VERDADERO. 0 significa FALSO
		$tipo_de_alimento_completo = 1;
		foreach($tipo_de_alimento->alimentosBares as $alimento){
			$encuesta = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->where("alimento_bares_id", "=", $alimento->id)->first();
			if(isset($encuesta)){
				continue;
			}else{
				$tipo_de_alimento_completo = 0;
			}
		}
				
		
		return $tipo_de_alimento_completo;
	}
	
	

	public function encuestaAlimentosBares()
	{
		return $this->hasMany('EncuestaAlimentosBares', 'usuario_id');
	}


	//======================
	//****************************************
	//
	//
	// Obtener estudiante randomicamente
	//
	//
	//======================
	//****************************************	
	public static function obtenerEstudianteRandomicamente()
	{
		$user = User::where("tipo", "=" , 'estudiante')->where("tiene_consumo_habitual", "=", "f")->orderBy(DB::raw('RANDOM()'))->take(1)->get();
		return $user;
	}

	public function consumoHabitualDeAlimento()
	    {
        return $this->hasOne('ConsumoHabitualDeAlimento');
	    }
	

}
