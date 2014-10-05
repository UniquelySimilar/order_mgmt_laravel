<?php

namespace Custom\Services\Validation;

class LoginFormValidator extends Validator {

	/**
	 * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
	 */
	public $rules = array(
		'email' => array( 'required', 'email' ),
		'password' => array( 'required', 'max:16' ),
	);

}
