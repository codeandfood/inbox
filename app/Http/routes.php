<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function(){
	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::group(['prefix' => 'admin'], function(){
		Route::get('/user', '\App\User\UserController@index');
		Route::get('/post', '\App\Post\PostController@index');
	});
});


Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'testController@index',
]);

// Route::get('/test', '\App\Signup\SignupController@signup');
