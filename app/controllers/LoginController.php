<?php

use Custom\Exceptions\ValidationException;
#use Custom\Services\Validation\LoginFormValidator;

class LoginController extends BaseController {

	protected $_validator;
/*
	public function __construct( LoginFormValidator $validator ) {
		$this->_validator = $validator;
	}
*/
	public function login() {
		//Log::info("Entered 'LoginController@login");

		return View::make('logins.login');
	}

	public function authenticate() {
		//Log::info("Entered 'LoginController@login");
        $user = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($user)) {
            return Redirect::route('root_path')
                ->with('success', 'You are successfully logged in.');
        }
        
        // authentication failure! lets go back to the login page
        return Redirect::route('login_path')
            ->with('error', 'Your username/password combination was incorrect.')
            ->withInput();

		return View::make('logins.login');
	}
}
