<?php

namespace Custom\Services\Validation;

// NOTE: If I create more form validators and rules, will probably want to move this 'require' to 'app/start/global.php'
require app_path().'/Custom/Services/Validation/ValidationRules.php';

class CustomerFormValidator extends Validator {

	/**
	 * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
	 */
	public $rules = array(
		'name' => array( 'required', 'alpha_spaces_periods', 'max:50' ),
		'street' => array( 'required', 'max:60' ),
		'city' => array( 'required', 'alpha_spaces_periods', 'max:50' ),
		'state' => array( 'required', 'alpha', 'max:2' ),
		'zipcode' => array( 'required', 'numeric', 'digits_between:5,9' ),
		'home_phone' => array( 'required', 'numeric', 'digits_between:8,25' ),
		'work_phone' => array( 'required', 'numeric', 'digits_between:8,25' ),
		'email' => array( 'required', 'email' ),
	);

}
