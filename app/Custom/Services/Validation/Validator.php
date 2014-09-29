<?php

namespace Custom\Services\Validation;

class Validator {
	public function validate() {
		$validation = \Validator::make(
			array(
				'name' => \Input::get( 'name' ),
				'email' => \Input::get( 'email' ),
			),
			array(
				'name' => array( 'required', 'alpha_dash' ),
				'email' => array( 'required', 'email' ),
			)
		);

		if ( $validation->fails() ) {
			return $validation->messages();
		}

		return true;
	}
}
