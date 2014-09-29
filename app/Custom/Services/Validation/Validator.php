<?php

namespace Custom\Services\Validation;

use Illuminate\Validation\Factory as IlluminateValidator;
use Custom\Exceptions\ValidationException;
//use Custom\Exceptions\BaseException;

abstract class Validator {
	protected $_validator;

	public function __construct( IlluminateValidator $validator ) {
		$this->_validator = $validator;
	}

	public function validate( array $data, array $rules = array(), array $custom_errors = array() ) {
		if ( empty( $rules ) && ! empty( $this->rules ) && is_array( $this->rules ) ) {
			//no rules passed to function, use the default rules defined in sub-class
			$rules = $this->rules;
		}

		//use Laravel's Validator and validate the data
		$validation = $this->_validator->make( $data, $rules, $custom_errors );

		if ( $validation->fails() ) {
			//validation failed, throw an exception
//			throw new BaseException( $validation->messages() );
			throw new ValidationException( $validation->messages() );
		}

		//all good and shiny
		return true;
	}
}

/*
| name       | varchar(255)     | NO   |     | NULL                |                |
| street     | varchar(255)     | NO   |     | NULL                |                |
| city       | varchar(255)     | NO   |     | NULL                |                |
| state      | varchar(255)     | NO   |     | NULL                |                |
| zipcode    | varchar(255)     | NO   |     | NULL                |                |
| home_phone | varchar(255)     | NO   |     | NULL                |                |
| work_phone | varchar(255)     | NO   |     | NULL                |                |
| email      | varchar(255)     | NO   | UNI | NULL                |                |
*/
/*
			array(
				'name' => \Input::get( 'name' ),
				'street' => \Input::get( 'street' ),
				'city' => \Input::get( 'city' ),
				'state' => \Input::get( 'state' ),
				'zipcode' => \Input::get( 'zipcode' ),
				'home_phone' => \Input::get( 'home_phone' ),
				'work_phone' => \Input::get( 'work_phone' ),
				'email' => \Input::get( 'email' ),
			),
			array(
				'name' => array( 'required', 'alpha_dash' ),
				'street' => array( 'required', 'email' ),
				'city' => array( 'required', 'alpha_dash' ),
				'state' => array( 'required', 'email' ),
				'zipcode' => array( 'required', 'alpha_dash' ),
				'home_phone' => array( 'required', 'email' ),
				'work_phone' => array( 'required', 'alpha_dash' ),
				'email' => array( 'required', 'email' ),
			),
*/