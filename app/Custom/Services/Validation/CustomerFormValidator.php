<?php
 
namespace Custom\Services\Validation;
 
class CustomerFormValidator extends Validator {
 
	/**
	 * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
	 */
	public $rules = array(
		'name' => array( 'required', 'alpha_dash', 'max:50' ),
		'street' => array( 'required', 'max:60' ),
		'city' => array( 'required', 'alpha_dash', 'max:50' ),
		'state' => array( 'required', 'alpha_dash', 'max:2' ),
		'zipcode' => array( 'required', 'numeric', 'max:5' ),
		'home_phone' => array( 'required', 'numeric', 'digits_between:8,25' ),
		'work_phone' => array( 'required', 'numeric', 'digits_between:8,25' ),
		'email' => array( 'required', 'email' ),
	);

}   //end of class
