<?php

class UsersController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth');
	}


	public function show($id)
	{
		$user = User::find($id);
		return View::make('users.profile', ['user' => $user]);
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::orderBy('perfiles_usuario_id')->orderBy('nombre')
        				->orderBy('apellido')->paginate(15);
        return View::make('users.index', array('users' => $users));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $perfiles = PerfilesUsuario::orderBy('nombre')->get();
        return View::make('users.create', array('perfiles' => $perfiles));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		
		$input = Input::all();
		$validator = Validator::make($input, User::$rules, User::$messages);
		$validator->setAttributeNames(User::$friendly_names);
		if ($validator->passes()) {
				$input['password'] = Hash::make($input['password']);
				$user = User::create($input);
				$user->nombre = strtoupper($input['nombre']);
				$user->apellido = strtoupper($input['apellido']);
				$user->cedula = $input['cedula'];
				//$user->tipo = $input['tipo'];
				$user->genero = $input['genero'];
				$user->perfiles_usuario_id = $input['perfiles_usuario_id'];
				$user->save();
				$users = User::orderBy('perfiles_usuario_id')->orderBy('nombre')
        				->orderBy('apellido')->paginate(15);				
		    	return View::make('users.index', array('users' => $users))->with('message', 'Nuevo usuario creado satisfactoriamente');
		} else {
		    return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function profile()
	{
		$user = Auth::user();		
		return View::make('users.profile', ['user' => $user]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
        $user = Auth::user();
        $input = Input::all();
        $validator = Validator::make($input, User::$rulesEditarPerfil, User::$messages);        
        if ($validator->passes()) {
	        $user->direccion = $input['direccion'];
	        $user->telefono = $input['telefono'];
	        $user->fecha_nacimiento = $input['fecha_nacimiento'];
	        $user->genero = $input['genero'];
	        $user->personas_hogar = $input['personas_hogar'];
	        $user->edito_perfil = TRUE;
	        $user->save();
			return View::make('users.profile', ['user' => $user]);
		}else {
		    return Redirect::back()->withInput()->withErrors($validator->messages());
		}

	}


	public function editProfile()
	{
        $user = Auth::user();
		return View::make('users.edit', ['user' => $user]);         
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function entries($id)
	{
		$user = User::find($id);
    	return View::make('entries.index', ['user' => $user]);
	}


	public function autocomplete(){		
		$term = Input::get('term');
		$results = array();
		$queries = DB::table('usuarios')
		->where('perfiles_usuario_id', '=', '2')
		->where('nombre', 'LIKE', '%'.$term.'%')
		->orWhere('apellido', 'LIKE', '%'.$term.'%')		
		->take(20)->get();
		foreach ($queries as $query)
		{
			$results[] = [ 'id' => $query->id, 'value' => $query->nombre.' '.$query->apellido ];
		}
		return Response::json($results);
	}

	public function aceptoDisclaimer()
	{
        $user = Auth::user();
        $input = Input::all();
        if ($input['disclaimer']=="SI") {
	        $user->acepto_disclaimer = TRUE;	        
	        $user->save();
			return View::make('users.profile', ['user' => $user]);
		}else {
		    Auth::logout();
			return Redirect::to('/login')->with('message', 'Your are now logged out!');
		}		
	}

	public function delete($id)
	{
		$usuario = User::find($id);
		$usuario->delete();
        return Redirect::back();
	}
}
