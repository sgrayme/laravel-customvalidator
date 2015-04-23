<?php namespace App\Validators;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator {

	public function validateCustom($attribute, $value, $parameters) 
	{
		return ((strlen($value) > 3) ? true : false);
	}

	protected function replaceCustom($message, $attribute, $rule, $parameters)
	{
		return str_replace(':attribute', (count($parameters) > 0 ? $parameters : ''), $message['custom']);
	}
}