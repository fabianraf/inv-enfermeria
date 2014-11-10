<?php

class SessionsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('sessions.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()) 
			return Redirect::to("/")->withErrors('Ya inició sesión');
    	return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(Input::only("email", "password")))
		{
			if(Auth::user()->perfiles_usuario_id == "1"){

				/*$users = User::all();
				foreach ($users as $user){
					$user->password = Hash::make($user->password);
					$user->nombre = strtoupper($user->nombre);
					$user->apellido = strtoupper($user->apellido);
					$user->save();
				}*/
				return Redirect::to("/");
			}
				
			else
				return Redirect::to("/profile");//View::make('users.profile');			
				
		}
		return Redirect::to('/login')->withErrors('Usuario o password incorrectos');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('sessions.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('sessions.edit');
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
	public function logout()
	{
		Auth::logout();
		return View::make('sessions.create')->with('message', 'Su sesión ha terminado');
	}

}
