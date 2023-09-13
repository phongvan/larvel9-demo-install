<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class CatValidator.
 *
 * @package namespace App\Validators;
 */
class CatValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
		'required|min:2'	=>'	title=>required|min:2',
		'sometimes|min:10'	=>'	content=>sometimes|min:10',
	],
        ValidatorInterface::RULE_UPDATE => [
		'required|min:2'	=>'	title=>required|min:2',
		'sometimes|min:10'	=>'	content=>sometimes|min:10',
	],
    ];
}
