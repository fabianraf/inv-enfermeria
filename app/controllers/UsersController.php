<?php

class UsersController extends BaseController {
	
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
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
        return View::make('users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input, User::$rules);
		if ($validator->passes()) {
				$input['password'] = Hash::make($input['password']);
				$user = User::create($input);
				Auth::login($user);
		    return Redirect::to('/profile')->with('message', 'Thanks for registering!');
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
        $user->fecha_nacimiento = $input['fecha_nacimiento'];
        $user->genero = $input['genero'];
        $user->personas_hogar = $input['personas_hogar'];
        $user->edito_perfil = 'SI';
        $user->save();
		return View::make('users.profile', ['user' => $user]); 

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


}
