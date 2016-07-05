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

Route::get('/et', '\App\Enquiry\EnquiryController@test');

Route::group(['middleware' => 'web'], function(){
	Route::auth();

	Route::get('/home', 'HomeController@index');
	Route::get('/enquiry', function () {
	    return view('enquiry');
	});
	Route::post('/enquiry', '\App\Enquiry\EnquiryController@entry');

	//--ADMIN--//
	Route::group(['prefix' => 'admin'], function(){
		Route::get('/user', '\App\User\UserController@index');
		Route::get('/post', '\App\Post\PostController@index');
	});
	//--ADMIN--//
});


// Route::get('/test', '\App\Signup\SignupController@signup');

