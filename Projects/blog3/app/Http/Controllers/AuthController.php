<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function store(Request $request)
    {
		// return 'It works';
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');

		$user = new User([
			'name' => $name,
			'email' => $email,
			'password' => bcrypt($password)
		]);

		if($user->save()) {
			$user->signin = [
				'href' => 'api/v1/user/signin',
				'method' => 'POST',
				'params' => 'email, password'
			];
			$response = [
				'msg' => 'User created',
				'user' => $user
			];
			return response()->json($response, 201);
		}

		$response = [
			'msg' => 'An error occured'
		];

		return response()->json($response, 404);

    }

       /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function signin(Request $request)
    {
    	return 'It works';
    }
}
