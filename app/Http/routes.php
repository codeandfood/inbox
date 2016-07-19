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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/et', '\App\Enquiry\EnquiryController@test');
Route::get('/', function () {
    return view('theme1.home');
});

Route::group(['middleware' => 'web'], function(){
	Route::auth();

	// Route::get('/home', 'HomeController@index');
	Route::get('/home', 'HomeController@clientDashboard');
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

	//--Laila's county--/
	Route::get('/offers', function () {
	    return view('offers');
	});
	Route::post('/offers', '\App\Offers\OffersController@entry');
	Route::get('/account', function () {
	    return view('account');
	});
	Route::get('/dashboard', function () {
	    return view('dashboard');
	});
	//--Laila's county--/

});


// Route::get('/test', '\App\Signup\SignupController@signup');

