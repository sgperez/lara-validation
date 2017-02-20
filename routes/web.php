<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Inline validation */
Route::get('form', 'FormController@show');
Route::post('formStore', 'FormController@store');

/* Manual validation */
Route::get('form1', 'FormController@show1');
Route::post('formStore1', 'FormController@store1');


/* FormRequest validation */
Route::get('form2', 'FormController@show2');
Route::post('formStore2', 'FormController@store2');