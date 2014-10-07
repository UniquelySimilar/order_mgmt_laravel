<?php

// Custom Validation Rules

Validator::extend('alpha_spaces_periods', function($attribute, $value)
{
	return preg_match('/^[\pL\s\.]+$/u', $value);
});

Validator::extend('phone_number', function($attribute, $value)
{
	// Allows multiple digits, periods, parenthesis, plus signs, and minus signs
	return preg_match('/^[0-9.()+-]+$/', $value);
});
