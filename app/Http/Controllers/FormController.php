<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{

    /* Inline validation */
    public function show()
    {
        $submit = 'formStore';
        return view('form.show')->with(compact('submit'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|alpha|min:2|max:10',
            'email' => 'required|email',
            'birth_year' => 'numeric|min:1900|max:2100',
        ]);

        dd('Validation passed');

    }





    /* Manual validation */
    public function show1()
    {
        $submit = 'formStore1';
        return view('form.show')->with(compact('submit'));
    }

    public function store1(Request $request)
    {

        $data = $request->all();

        $rules = [
            'first_name' => 'sometimes|required|alpha|min:2|max:10',
            'email' => 'required|email|unique:users,email',
            'birth_year' => 'numeric|min:1900|max:2100',
        ];

        $messages = [
            'required' => 'The :attribute MUST be provided',
            'first_name.required' => 'Did you forget your first name?',
            'first_name.alpha' => 'What kind of name is that?',
            // 'first_name.min' => 'Due to a change in law in the year 2000, names must have a minimun lenght of :min',
        ];

        $validator = Validator::make($data, $rules, $messages);

        /*
        $validator->sometimes('first_name', 'min:5', function ($input) {
            return $input->birth_year >= 2000;
        });
        */


        if($validator->fails()) {
            return redirect('form1')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Validator::make($data, $rules, $messages)->validate();

        dd('Validation passed');

    }



    /* FormRequest validation */
    public function show2()
    {
        $submit = 'formStore2';
        return view('form.show')->with(compact('submit'));
    }  

    public function store2(UserRequest $request)
    {
        dd('Validation passed');
    }
}
