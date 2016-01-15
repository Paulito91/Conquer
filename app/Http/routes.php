<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/in', function () {
    return view('pradzia');
});
Route::get('/reg', function() {
   return view('reg');
});
Route::get('/', function() {
    return view('registration');
});
Route::post('/', function()
{
    $rules = [
        'first_name'  =>  'required',
        'last_name'   =>  'required',
        'email'       =>  'required|email',
        'password'    =>  'required|confirmed'
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails())
    {
        return Redirect::to('register')->withInput()->withErrors($validator);
    }

    return 'Form passed validation!';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
