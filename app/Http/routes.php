<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| 
|
*/
use App\Patient;

/**
 * routes for the contact and about pages
 */
Route::get('/','appController@index');
Route::get('io','appController@about');
Route::get('dash','patientController@index');




/*
Resourceful controllers.
 */
Route::resource('patient' ,'patientController');

Route::resource('nurse', 'nurseController');

Route::resource('doctor' ,'doctorController');

Route::resource('admin', 'adminController');

Route::get('doctor/create/{id}' ,'doctorController@create');

Route::get('admin/{id}/delete' ,'adminController@delete');





/**
 * Route for authentication.
 */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::post('dash',function(){

	$keyword=trim(Input::get('keyword'));
	$name=Patient::where('firstName','LIKE','%'.$keyword.'%')->get();
	return view('patients.search',compact('name'));
	
});



