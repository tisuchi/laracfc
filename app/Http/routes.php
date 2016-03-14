<?php


Route::get('/', [
	'uses'	=> 'HomeController@index',
	'as'	=> 'home',
]);




Route::get('/search/profile', [
	'uses'	=> 'SearchController@getProfileResult',
	'as'	=> 'profileSearch',
]);










/*open for all guest user*/
Route::group(['middleware' => ['guest']], function () {


	Route::get('join', [
		'uses'	=> 'AuthController@getJoin',
		'as'	=> 'join',
	]);

	Route::post('join', [
		'uses'	=> 'AuthController@postJoin',
	]);


	Route::get('login', [
		'uses'	=> 'AuthController@getLogin',
		'as'	=> 'login',
	]);


	Route::post('login', [
		'uses'	=> 'AuthController@postLogin',
	]);

});




/*protected routes for authenticate user only*/

Route::group(['middleware' => ['auth']], function () {

	Route::get('/dashboard', [
		'uses'		=> 'DashboardController@index',
		'as'		=> 'dashboard'
	]);

	Route::get('/dashboard/add', [
		'uses'		=> 'DashboardController@getAddEvent',
		'as'		=> 'addEvent'
	]);


	Route::get('/profile/edit', [
		'uses'		=> 'ProfileController@getEditProfile',
		'as'		=> 'editProfile'
	]);


	Route::get('/logout', [
		'uses'		=> 'AuthController@logout',
		'as'		=> 'logout'
	]);

});
