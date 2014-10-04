<?php

// Custom Validation Rules

Validator::extend('alpha_spaces_periods', function($attribute, $value)
{
	return preg_match('/^[\pL\s\.]+$/u', $value);
});
