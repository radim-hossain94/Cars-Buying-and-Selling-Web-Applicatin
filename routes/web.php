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

Route::get('/', 'landingController@index')->name('landing.index');

//Registration
Route::post('/register', 'RegistersController@registerPost');
Route::get('/register', 'RegistersController@register')->name('register');

//Login
Route::get('/login', 'loginController@login')->name('login');
Route::post('/login', 'loginController@loginPost');
//Logout
Route::get('/logout','logoutController@index')->name('logout.index');




Route::group(['middleware'=>'sessUserCheck'],function(){
	//User Home
	Route::get('/home','homeController@index')->name('home');
	Route::get('/sell','carController@sell')->name('sell');
	Route::post('/sell','carController@sellPost');

	//admin
	Route::get('/adminhome','adminhomeController@index')->name('adminhome');
	Route::get('/adminhome/{email}/delete','adminhomeController@delete')->name('adminhome.delete');
	Route::post('/adminhome/{email?}/delete','adminhomeController@destroy');
	Route::get('/adminseeallpost','adminhomeController@allpost')->name('adminhome.posts');
	// Route::get('/admindeletepost','adminhomeController@admindeletepost')->name('admindeletepost');

	//buy
	Route::get('/userhome/{id}/buy','buyController@buy')->name('userhome.buy');
	Route::post('/userhome/{id?}/buy','buyController@destroy');

	//post edit
	Route::get('/userhome/{id}/editpost','carController@show')->name('userhome.editpost');
	Route::post('/userhome/{id}/editpost','carController@update');

	//post delete
	Route::get('/userhome/{id}/deletepost','carController@delete')->name('userhome.deletepost');
	Route::post('/userhome/deletepost','carController@destroy');



	//user edit
	Route::get('/userhome/{email}/profile','showUserController@show')->name('userhome.profile');
	Route::get('/userhome/{email}/edit','showUserController@edit')->name('userhome.edit');
	Route::post('/userhome/{email}/edit','showUserController@update')->name('userhome.update');

	//Report

	Route::get('/report','reportController@show')->name('report');

	//search
	Route::get('/search/live_search', 'LiveSearch@index')->name('search.live_search');
    Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');
});

