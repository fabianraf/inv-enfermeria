<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	
	protected $fillable = array('email', 'password','perfiles_usuario_id');

	protected $guarded = array('id');

	public static $rules = array(
	    'email'=>'required|email|unique:usuarios',
	    'password' => 'required',
	    'perfiles_usuario_id' => 'required',
	    'genero' => 'required',
	    'password_confirm' => 'required|same:password'    
	    );

	public static $rulesEditarPerfil = array(
	    'direccion'=>'required',
	    'telefono'=>'required',
	    'fecha_nacimiento'=>'required',
	    'personas_hogar'=>'required'
	    );

	public static $messages = array(
		'personas_hogar.required' => 'Ingresa la información de las personas con las que vives',
		'password_confirm.same' => 'Las contraseñas no coinciden, vuelva a ingresarlas'
		);

	public static $friendly_names = array(
		'perfiles_usuario_id' => 'perfil',
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

	//========================================
	//****************************************
	//
	//
	// Obtener estudiante randomicamente
	//
	//
	//========================================
	//****************************************	
	public static function obtenerEstudianteRandomicamente()
	{
		//id del Perfil Estudiante es 2
		$user = User::where("perfiles_usuario_id", "=" , 2)->where("tiene_consumo_habitual", "=", "f")->orderBy(DB::raw('RANDOM()'))->take(1)->get();
		return $user;
	}

	public function consumoHabitualDeAlimento()
	    {
        return $this->hasOne('ConsumoHabitualDeAlimento');
	    }

	public function perfilUsuario()
	    {
        return $this->belongsTo('PerfilesUsuario','perfiles_usuario_id')->orderBy('nombre','ASC');
	    }

	public function antropometria()
	    {
        return $this->hasOne('Antropometrias', 'usuario_id');
	    }

	public function bioquimica()
	    {
        return $this->hasOne('Bioquimica', 'usuario_id');
	    }

	public static function usuariosConConsumohabitual(){
		return User::where("perfiles_usuario_id", "=" , 2)->where("tiene_consumo_habitual", "=", "t")->orderBy('apellido')->get();
	}

	public function esAdmin(){
		if($this->perfilUsuario->nombre == 'Admin')
			return true;
		else
			return false;
	}

	public function getEdad()
	{
		$birthday = new DateTime($this->fecha_nacimiento);
        $interval = $birthday->diff(new DateTime);
        return $interval->y;
	}

	public function resultadoEncuestasAlimentosUniversidad()
	{
    	return $this->hasOne('ResultadoEncuestasAlimentosUniversidad', 'usuario_id');
	}

	public function resultadoEncuestasAlimentosBares()
	{
    	return $this->hasOne('ResultadoEncuestasAlimentosBares', 'usuario_id');
	}

	/*
	public function getTotalCalorias($tipo_encuesta)
	//1 para hogares y Universidad
	//2 para bares
	{
		$totalCalorias = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;				
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalCalorias += ($pesoPorcion * $encuesta->alimento->calorias)/100;												
				}
				return $totalCalorias;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);					
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;									
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);					
					$totalCalorias += ($pesoPorcion * $encuesta->alimentoBares->calorias)/100;												
				}
				return $totalCalorias;
			}
		}			
	}

	public function getTotalHumedad($tipo_encuesta)
	{
		$totalHumedad = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalHumedad += ($pesoPorcion * $encuesta->alimento->humedad)/100;												
				}
				return $totalHumedad;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalHumedad += ($pesoPorcion * $encuesta->alimentoBares->humedad)/100;												
				}
				return $totalHumedad;
			}
		}		
	}

	public function getTotalProteinas($tipo_encuesta)
	{
		$totalProteinas = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalProteinas += ($pesoPorcion * $encuesta->alimento->proteinas)/100;												
				}
				return $totalProteinas;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalProteinas += ($pesoPorcion * $encuesta->alimentoBares->proteinas)/100;												
				}
				return $totalProteinas;
			}
		}		
	}

	public function getTotalHidratosDeC($tipo_encuesta)
	{
		$totalHidratosDeC = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalHidratosDeC += ($pesoPorcion * $encuesta->alimento->hidratos_de_c)/100;
				}
				return $totalHidratosDeC;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalHidratosDeC += ($pesoPorcion * $encuesta->alimentoBares->hidratos_de_c)/100;												
				}
				return $totalHidratosDeC;
			}
		}		
	}

	public function getTotalFibraDietaria($tipo_encuesta)
	{
		$totalFibraDietaria = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalFibraDietaria += ($pesoPorcion * $encuesta->alimento->fibra_dietaria)/100;
				}
				return $totalFibraDietaria;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalFibraDietaria += ($pesoPorcion * $encuesta->alimentoBares->fibra_dietaria)/100;												
				}
				return $totalFibraDietaria;
			}
		}		
	}

	public function getTotalLipidos($tipo_encuesta)
	{
		$totalLipidos = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalLipidos += ($pesoPorcion * $encuesta->alimento->lipidos)/100;												
				}
				return $totalLipidos;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalLipidos += ($pesoPorcion * $encuesta->alimentoBares->lipidos)/100;												
				}
				return $totalLipidos;
			}
		}		
	}

	public function getTotalAcidosGrasosSaturados($tipo_encuesta)
	{
		$totalAcidosGrasosSaturados = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalAcidosGrasosSaturados += ($pesoPorcion * $encuesta->alimento->acidos_grasos_saturados)/100;												
				}
				return $totalAcidosGrasosSaturados;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalAcidosGrasosSaturados += ($pesoPorcion * $encuesta->alimentoBares->acidos_grasos_saturados)/100;												
				}
				return $totalAcidosGrasosSaturados;
			}
		}		
	}

	public function getTotalAcidosGrasosMonoinsat($tipo_encuesta)
	{
		$totalAcidosGrasosMonoinsat = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalAcidosGrasosMonoinsat += ($pesoPorcion * $encuesta->alimento->acidos_grasos_monoinsat)/100;												
				}
				return $totalAcidosGrasosMonoinsat;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalAcidosGrasosMonoinsat += ($pesoPorcion * $encuesta->alimentoBares->acidos_grasos_monoinsat)/100;												
				}
				return $totalAcidosGrasosMonoinsat;
			}
		}		
	}

	public function getTotalAcidosGrasosPolinsat($tipo_encuesta)
	{
		$totalAcidosGrasosPolinsat = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalAcidosGrasosPolinsat += ($pesoPorcion * $encuesta->alimento->acidos_grasos_polinsat)/100;												
				}
				return $totalAcidosGrasosPolinsat;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalAcidosGrasosPolinsat += ($pesoPorcion * $encuesta->alimentoBares->acidos_grasos_polinsat)/100;												
				}
				return $totalAcidosGrasosPolinsat;
			}
		}		
	}

	public function getTotalColesterol($tipo_encuesta)
	{
		$totalColesterol = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalColesterol += ($pesoPorcion * $encuesta->alimento->colesterol)/100;												
				}
				return $totalColesterol;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalColesterol += ($pesoPorcion * $encuesta->alimentoBares->colesterol)/100;												
				}
				return $totalColesterol;
			}
		}		
	}

	public function getTotalN6($tipo_encuesta)
	{
		$totalN6 = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalN6 += ($pesoPorcion * $encuesta->alimento->n6)/100;												
				}
				return $totalN6;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalN6 += ($pesoPorcion * $encuesta->alimentoBares->n6)/100;												
				}
				return $totalN6;
			}
		}		
	}

	public function getTotalN3($tipo_encuesta)
	{
		$totalN3 = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalN3 += ($pesoPorcion * $encuesta->alimento->n3)/100;												
				}
				return $totalN3;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalN3 += ($pesoPorcion * $encuesta->alimentoBares->n3)/100;												
				}
				return $totalN3;
			}
		}		
	}

	public function getTotalCaroteno($tipo_encuesta)
	{
		$totalCaroteno = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalCaroteno += ($pesoPorcion * $encuesta->alimento->caroteno)/100;												
				}
				return $totalCaroteno;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalCaroteno += ($pesoPorcion * $encuesta->alimentoBares->caroteno)/100;												
				}
				return $totalCaroteno;
			}
		}		
	}

	public function getTotalRetinolRe($tipo_encuesta)
	{
		$totalRetinolRe = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalRetinolRe += ($pesoPorcion * $encuesta->alimento->retinol_re)/100;												
				}
				return $totalRetinolRe;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalRetinolRe += ($pesoPorcion * $encuesta->alimentoBares->retinol_re)/100;												
				}
				return $totalRetinolRe;
			}
		}		
	}

	public function getTotalVitATotalRe($tipo_encuesta)
	{
		$totalVitATotalRe = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitATotalRe += ($pesoPorcion * $encuesta->alimento->vit_a_total_re)/100;												
				}
				return $totalVitATotalRe;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitATotalRe += ($pesoPorcion * $encuesta->alimentoBares->vit_a_total_re)/100;												
				}
				return $totalVitATotalRe;
			}
		}		
	}

	public function getTotalVitB1($tipo_encuesta)
	{
		$totalVitB1 = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitB1 += ($pesoPorcion * $encuesta->alimento->vit_b1)/100;												
				}
				return $totalVitB1;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitB1 += ($pesoPorcion * $encuesta->alimentoBares->vit_b1)/100;												
				}
				return $totalVitB1;
			}
		}		
	}

	public function getTotalVitB2($tipo_encuesta)
	{
		$totalVitB2 = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitB2 += ($pesoPorcion * $encuesta->alimento->vit_b2)/100;												
				}
				return $totalVitB2;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitB2 += ($pesoPorcion * $encuesta->alimentoBares->vit_b2)/100;												
				}
				return $totalVitB2;
			}
		}		
	}

	public function getTotalNiacina($tipo_encuesta)
	{
		$totalNiacina = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalNiacina += ($pesoPorcion * $encuesta->alimento->niacina)/100;												
				}
				return $totalNiacina;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalNiacina += ($pesoPorcion * $encuesta->alimentoBares->niacina)/100;												
				}
				return $totalNiacina;
			}
		}		
	}

	public function getTotalVitB6($tipo_encuesta)
	{
		$totalVitB6 = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitB6 += ($pesoPorcion * $encuesta->alimento->vit_b6)/100;												
				}
				return $totalVitB6;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitB6 += ($pesoPorcion * $encuesta->alimentoBares->vit_b6)/100;												
				}
				return $totalVitB6;
			}
		}		
	}

	public function getTotalVitB12($tipo_encuesta)
	{
		$totalVitB12 = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitB12 += ($pesoPorcion * $encuesta->alimento->vit_b12)/100;												
				}
				return $totalVitB12;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitB12 += ($pesoPorcion * $encuesta->alimentoBares->vit_b12)/100;												
				}
				return $totalVitB12;
			}
		}		
	}

	public function getTotalFolatos($tipo_encuesta)
	{
		$totalFolatos = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalFolatos += ($pesoPorcion * $encuesta->alimento->folatos)/100;												
				}
				return $totalFolatos;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalFolatos += ($pesoPorcion * $encuesta->alimentoBares->folatos)/100;												
				}
				return $totalFolatos;
			}
		}		
	}

	public function getTotalAcidoPantogenico($tipo_encuesta)
	{
		$totalAcidoPantogenico = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalAcidoPantogenico += ($pesoPorcion * $encuesta->alimento->acido_pantogenico)/100;												
				}
				return $totalAcidoPantogenico;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalAcidoPantogenico += ($pesoPorcion * $encuesta->alimentoBares->acido_pantogenico)/100;												
				}
				return $totalAcidoPantogenico;
			}
		}		
	}

	public function getTotalVitC($tipo_encuesta)
	{
		$totalVitC = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitC += ($pesoPorcion * $encuesta->alimento->vit_c)/100;												
				}
				return $totalVitC;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitC += ($pesoPorcion * $encuesta->alimentoBares->vit_c)/100;												
				}
				return $totalVitC;
			}
		}		
	}

	public function getTotalVitE($tipo_encuesta)
	{
		$totalVitE = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalVitE += ($pesoPorcion * $encuesta->alimento->vit_e)/100;												
				}
				return $totalVitE;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalVitE += ($pesoPorcion * $encuesta->alimentoBares->vit_e)/100;												
				}
				return $totalVitE;
			}
		}		
	}

	public function getTotalCalcio($tipo_encuesta)
	{
		$totalCalcio = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalCalcio += ($pesoPorcion * $encuesta->alimento->calcio)/100;												
				}
				return $totalCalcio;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalCalcio += ($pesoPorcion * $encuesta->alimentoBares->calcio)/100;												
				}
				return $totalCalcio;
			}
		}		
	}

	public function getTotalCobre($tipo_encuesta)
	{
		$totalCobre = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalCobre += ($pesoPorcion * $encuesta->alimento->cobre)/100;												
				}
				return $totalCobre;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalCobre += ($pesoPorcion * $encuesta->alimentoBares->cobre)/100;												
				}
				return $totalCobre;
			}
		}		
	}

	public function getTotalHierro($tipo_encuesta)
	{
		$totalHierro = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalHierro += ($pesoPorcion * $encuesta->alimento->hierro)/100;												
				}
				return $totalHierro;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalHierro += ($pesoPorcion * $encuesta->alimentoBares->hierro)/100;												
				}
				return $totalHierro;
			}
		}		
	}

	public function getTotalMagnesio($tipo_encuesta)
	{
		$totalMagnesio = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalMagnesio += ($pesoPorcion * $encuesta->alimento->magnesio)/100;												
				}
				return $totalMagnesio;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalMagnesio += ($pesoPorcion * $encuesta->alimentoBares->magnesio)/100;												
				}
				return $totalMagnesio;
			}
		}		
	}

	public function getTotalFosforo($tipo_encuesta)
	{
		$totalFosforo = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalFosforo += ($pesoPorcion * $encuesta->alimento->fosforo)/100;												
				}
				return $totalFosforo;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalFosforo += ($pesoPorcion * $encuesta->alimentoBares->fosforo)/100;												
				}
				return $totalFosforo;
			}
		}		
	}

	public function getTotalPotasio($tipo_encuesta)
	{
		$totalPotasio = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalPotasio += ($pesoPorcion * $encuesta->alimento->potasio)/100;												
				}
				return $totalPotasio;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalPotasio += ($pesoPorcion * $encuesta->alimentoBares->potasio)/100;												
				}
				return $totalPotasio;
			}
		}		
	}

	public function getTotalSelenio($tipo_encuesta)
	{
		$totalSelenio = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalSelenio += ($pesoPorcion * $encuesta->alimento->selenio)/100;												
				}
				return $totalSelenio;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalSelenio += ($pesoPorcion * $encuesta->alimentoBares->selenio)/100;												
				}
				return $totalSelenio;
			}
		}		
	}

	public function getTotalSodio($tipo_encuesta)
	{
		$totalSodio = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalSodio += ($pesoPorcion * $encuesta->alimento->sodio)/100;												
				}
				return $totalSodio;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalSodio += ($pesoPorcion * $encuesta->alimentoBares->sodio)/100;												
				}
				return $totalSodio;
			}
		}		
	}

	public function getTotalZinc($tipo_encuesta)
	{
		$totalZinc = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalZinc += ($pesoPorcion * $encuesta->alimento->zinc)/100;												
				}
				return $totalZinc;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalZinc += ($pesoPorcion * $encuesta->alimentoBares->zinc)/100;												
				}
				return $totalZinc;
			}
		}		
	}

	public function getTotalCenizas($tipo_encuesta)
	{
		$totalCenizas = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalCenizas += ($pesoPorcion * $encuesta->alimento->cenizas)/100;												
				}
				return $totalCenizas;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalCenizas += ($pesoPorcion * $encuesta->alimentoBares->cenizas)/100;												
				}
				return $totalCenizas;
			}
		}		
	}

	public function getTotalAcidoFolico($tipo_encuesta)
	{
		$totalAcidoFolico = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalAcidoFolico += ($pesoPorcion * $encuesta->alimento->acido_folico)/100;												
				}
				return $totalAcidoFolico;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalAcidoFolico += ($pesoPorcion * $encuesta->alimentoBares->acido_folico)/100;												
				}
				return $totalAcidoFolico;
			}
		}		
	}

	public function getTotalFraccionComestible($tipo_encuesta)
	{
		$totalFraccionComestible = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalFraccionComestible += ($pesoPorcion * $encuesta->alimento->fraccion_comestible)/100;												
				}
				return $totalFraccionComestible;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalFraccionComestible += ($pesoPorcion * $encuesta->alimentoBares->fraccion_comestible)/100;												
				}
				return $totalFraccionComestible;
			}
		}		
	}

	public function getTotalCarbohidratosDisponibles($tipo_encuesta)
	{
		$totalCarbohidratosDisponibles = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalCarbohidratosDisponibles += ($pesoPorcion * $encuesta->alimento->carbohidratos_disponibles)/100;												
				}
				return $totalCarbohidratosDisponibles;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalCarbohidratosDisponibles += ($pesoPorcion * $encuesta->alimentoBares->carbohidratos_disponibles)/100;												
				}
				return $totalCarbohidratosDisponibles;
			}
		}		
	}

	public function getTotalFibraCruda($tipo_encuesta)
	{
		$totalFibraCruda = 0;
		if($tipo_encuesta==1){
			if($this::has('encuestaAlimentosUniversidad')){
				$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosUniversidad as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
					$totalFibraCruda += ($pesoPorcion * $encuesta->alimento->fibra_cruda)/100;												
				}
				return $totalFibraCruda;
			}
		}
		elseif($tipo_encuesta==2){
			if($this::has('encuestaAlimentosBares')){
				$encuestaAlimentosBares = EncuestaAlimentosBares::where("usuario_id", "=", $this->id)->get();			
				foreach($encuestaAlimentosBares as $encuesta)
				{
					$frecuencia = ($encuesta->frecuencia > 0 ? $encuesta->frecuencia : 0);
					$promedioPorcion = ($frecuencia * $encuesta->num_porciones)/7;	
					$pesoPorcion = ($promedioPorcion * $encuesta->alimentoBares->gramos);
					$totalFibraCruda += ($pesoPorcion * $encuesta->alimentoBares->fibra_cruda)/100;												
				}
				return $totalFibraCruda;
			}
		}		
	}*/

}
