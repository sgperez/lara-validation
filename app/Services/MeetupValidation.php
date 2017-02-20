<?php
namespace App\Services;

use Illuminate\Validation\Validator;

class MeetupValidation extends Validator {

    public function validateSecretCode($attribute, $value, $parameters)
    {
        return ('secret' === $value);
    }

} 