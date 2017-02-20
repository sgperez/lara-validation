<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'sometimes|required|alpha|min:2|max:10',
            'email' => 'required|email|unique:users,email',
            'birth_year' => 'numeric|min:1900|max:2100',
            //'code' => 'secretCode',
        ];
    }


    /*public function messages()
    {
        return [
             'required' => 'The :attribute MUST be provided',
            'first_name.required' => 'Did you forget your first name?',
            'first_name.alpha' => 'What kind of name is that?',
            // 'first_name.min' => 'Due to a change in the law in the year 2000, names must have a minimun lenght of :min',
        ];

    }*/

    /*
    public function getValidatorInstance() {
        $validator = parent::getValidatorInstance();
        $validator->after(function() use ($validator) {
            $year = $validator->getData()['birth_year'];
            if ($year % 2 !== 0) {
                $validator->errors()->add('birth_year', 'The year must be an EVEN number');
            }
        });

        return $validator;
    }
    */
}
