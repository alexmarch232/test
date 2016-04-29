<?php


/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', 'WelcomeController@index');

Route::get('/', ['as' => 'posts.index', 'uses' => "PostController@index"]);


Route::post('/signin', ['as' => 'signin.index', 'uses' => "SigninController@index"]);


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

