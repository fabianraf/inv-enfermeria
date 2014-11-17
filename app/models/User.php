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

	public function getEdad()
	{
		$birthday = new DateTime($this->fecha_nacimiento);
        $interval = $birthday->diff(new DateTime);
        return $interval->y;
	}

	public function getTotalCalorias()
	{
		$totalCalorias = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalCalorias += ($pesoPorcion * $encuesta->alimento->calorias)/100;												
			}
			return $totalCalorias;
		}			
	}

	public function getTotalHumedad()
	{
		$totalHumedad = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalHumedad += ($pesoPorcion * $encuesta->alimento->humedad)/100;												
			}
			return $totalHumedad;
		}			
	}


	public function getTotalProteinas()
	{
		$totalProteinas = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalProteinas += ($pesoPorcion * $encuesta->alimento->proteinas)/100;												
			}
			return $totalProteinas;
		}			
	}

	public function getTotalHidratosDeC()
	{
		$totalHidratosDeC = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalHidratosDeC += ($pesoPorcion * $encuesta->alimento->hidratos_de_c)/100;												
			}
			return $totalHidratosDeC;
		}			
	}

	public function getTotalFibraDietaria()
	{
		$totalFibraDietaria = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalFibraDietaria += ($pesoPorcion * $encuesta->alimento->fibra_dietaria)/100;												
			}
			return $totalFibraDietaria;
		}			
	}

	public function getTotalLipidos()
	{
		$totalLipidos = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalLipidos += ($pesoPorcion * $encuesta->alimento->lipidos)/100;												
			}
			return $totalLipidos;
		}			
	}

	public function getTotalAcidosGrasosSaturados()
	{
		$totalAcidosGrasosSaturados = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalAcidosGrasosSaturados += ($pesoPorcion * $encuesta->alimento->acidos_grasos_saturados)/100;												
			}
			return $totalAcidosGrasosSaturados;
		}			
	}

	public function getTotalAcidosGrasosMonoinsat()
	{
		$totalAcidosGrasosMonoinsat = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalAcidosGrasosMonoinsat += ($pesoPorcion * $encuesta->alimento->acidos_grasos_monoinsat)/100;												
			}
			return $totalAcidosGrasosMonoinsat;
		}			
	}

	public function getTotalAcidosGrasosPolinsat()
	{
		$totalAcidosGrasosPolinsat = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalAcidosGrasosPolinsat += ($pesoPorcion * $encuesta->alimento->acidos_grasos_polinsat)/100;												
			}
			return $totalAcidosGrasosPolinsat;
		}			
	}

	public function getTotalColesterol()
	{
		$totalColesterol = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalColesterol += ($pesoPorcion * $encuesta->alimento->colesterol)/100;												
			}
			return $totalColesterol;
		}			
	}

	public function getTotalN6()
	{
		$totalN6 = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalN6 += ($pesoPorcion * $encuesta->alimento->n6)/100;												
			}
			return $totalN6;
		}			
	}

	public function getTotalN3()
	{
		$totalN3 = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalN3 += ($pesoPorcion * $encuesta->alimento->n3)/100;												
			}
			return $totalN3;
		}			
	}

	public function getTotalCaroteno()
	{
		$totalCaroteno = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalCaroteno += ($pesoPorcion * $encuesta->alimento->caroteno)/100;												
			}
			return $totalCaroteno;
		}			
	}

	public function getTotalRetinolRe()
	{
		$totalRetinolRe = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalRetinolRe += ($pesoPorcion * $encuesta->alimento->retinol_re)/100;												
			}
			return $totalRetinolRe;
		}
	}

	public function getTotalVitATotalRe()
	{
		$totalVitATotalRe = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitATotalRe += ($pesoPorcion * $encuesta->alimento->vit_a_total_re)/100;												
			}
			return $totalVitATotalRe;
		}
	}

	public function getTotalVitB1()
	{
		$totalVitB1 = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitB1 += ($pesoPorcion * $encuesta->alimento->vit_b1)/100;												
			}
			return $totalVitB1;
		}
	}

	public function getTotalVitB2()
	{
		$totalVitB2 = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitB2 += ($pesoPorcion * $encuesta->alimento->vit_b2)/100;												
			}
			return $totalVitB2;
		}
	}

	public function getTotalNiacina()
	{
		$totalNiacina = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalNiacina += ($pesoPorcion * $encuesta->alimento->niacina)/100;												
			}
			return $totalNiacina;
		}
	}

	public function getTotalVitB6()
	{
		$totalVitB6 = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitB6 += ($pesoPorcion * $encuesta->alimento->vit_b6)/100;												
			}
			return $totalVitB6;
		}
	}

	public function getTotalVitB12()
	{
		$totalVitB12 = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitB12 += ($pesoPorcion * $encuesta->alimento->vit_b12)/100;												
			}
			return $totalVitB12;
		}
	}

	public function getTotalFolatos()
	{
		$totalFolatos = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalFolatos += ($pesoPorcion * $encuesta->alimento->folatos)/100;												
			}
			return $totalFolatos;
		}
	}

	public function getTotalAcidoPantogenico()
	{
		$totalAcidoPantogenico = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalAcidoPantogenico += ($pesoPorcion * $encuesta->alimento->acido_pantogenico)/100;												
			}
			return $totalAcidoPantogenico;
		}
	}

	public function getTotalVitC()
	{
		$totalVitC = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitC += ($pesoPorcion * $encuesta->alimento->vit_c)/100;												
			}
			return $totalVitC;
		}
	}

	public function getTotalVitE()
	{
		$totalVitE = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalVitE += ($pesoPorcion * $encuesta->alimento->vit_e)/100;												
			}
			return $totalVitE;
		}
	}

	public function getTotalCalcio()
	{
		$totalCalcio = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalCalcio += ($pesoPorcion * $encuesta->alimento->calcio)/100;												
			}
			return $totalCalcio;
		}
	}

	public function getTotalCobre()
	{
		$totalCobre = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalCobre += ($pesoPorcion * $encuesta->alimento->cobre)/100;												
			}
			return $totalCobre;
		}
	}

	public function getTotalHierro()
	{
		$totalHierro = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalHierro += ($pesoPorcion * $encuesta->alimento->hierro)/100;												
			}
			return $totalHierro;
		}
	}

	public function getTotalMagnesio()
	{
		$totalMagnesio = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalMagnesio += ($pesoPorcion * $encuesta->alimento->magnesio)/100;												
			}
			return $totalMagnesio;
		}
	}

	public function getTotalFosforo()
	{
		$totalFosforo = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalFosforo += ($pesoPorcion * $encuesta->alimento->fosforo)/100;												
			}
			return $totalFosforo;
		}
	}

	public function getTotalPotasio()
	{
		$totalPotasio = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalPotasio += ($pesoPorcion * $encuesta->alimento->potasio)/100;												
			}
			return $totalPotasio;
		}
	}

	public function getTotalSelenio()
	{
		$totalSelenio = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalSelenio += ($pesoPorcion * $encuesta->alimento->selenio)/100;												
			}
			return $totalSelenio;
		}
	}

	public function getTotalSodio()
	{
		$totalSodio = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalSodio += ($pesoPorcion * $encuesta->alimento->sodio)/100;												
			}
			return $totalSodio;
		}
	}

	public function getTotalZinc()
	{
		$totalZinc = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalZinc += ($pesoPorcion * $encuesta->alimento->zinc)/100;												
			}
			return $totalZinc;
		}
	}

	public function getTotalCenizas()
	{
		$totalCenizas = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalCenizas += ($pesoPorcion * $encuesta->alimento->cenizas)/100;												
			}
			return $totalCenizas;
		}
	}

	public function getTotalAcidoFolico()
	{
		$totalAcidoFolico = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalAcidoFolico += ($pesoPorcion * $encuesta->alimento->acido_folico)/100;												
			}
			return $totalAcidoFolico;
		}
	}

	public function getTotalFraccionComestible()
	{
		$totalFraccionComestible = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalFraccionComestible += ($pesoPorcion * $encuesta->alimento->fraccion_comestible)/100;												
			}
			return $totalFraccionComestible;
		}
	}

	public function getTotalCarbohidratosDisponibles()
	{
		$totalCarbohidratosDisponibles = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalCarbohidratosDisponibles += ($pesoPorcion * $encuesta->alimento->carbohidratos_disponibles)/100;												
			}
			return $totalCarbohidratosDisponibles;
		}
	}

	public function getTotalFibraCruda()
	{
		$totalFibraCruda = 0;
		if($this::has('encuestaAlimentosUniversidad')){
			$encuestaAlimentosUniversidad = EncuestaAlimentosUniversidad::where("usuario_id", "=", $this->id)->get();			
			foreach($encuestaAlimentosUniversidad as $encuesta)
			{
				$promedioPorcion = ($encuesta->frecuencia * $encuesta->num_porciones)/7;				
				$pesoPorcion = ($promedioPorcion * $encuesta->alimento->gramos);
				$totalFibraCruda += ($pesoPorcion * $encuesta->alimento->fibra_cruda)/100;												
			}
			return $totalFibraCruda;
		}
	}
}
