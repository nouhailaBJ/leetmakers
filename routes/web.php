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
Route::group(['middleware' => ['web' , 'admin']] , function() {
	Route::get('/adminpanel','AdminController@index');
	Route::get('/adminpanel/users','UsersController@index');
	Route::get('/adminpanel/users/create','UsersController@create');
	Route::post('/adminpanel/users/store','UsersController@store');
	Route::get('/adminpanel/users/edit/{id}','UsersController@edit');
	Route::put('/adminpanel/users/update/{id}','UsersController@update');
	Route::get('/adminpanel/users/delete/{id}','UsersController@destroy');

	// projects
	Route::get('/adminpanel/projects','ProjectController@index');
	Route::get('/adminpanel/projects/index','ProjectController@index');
	Route::get('/adminpanel/projects/create','ProjectController@create');
	Route::post('/adminpanel/projects/store','ProjectController@store');
	Route::get('/adminpanel/projects/edit/{id}','ProjectController@edit');
	Route::put('/adminpanel/projects/update/{id}','ProjectController@update');
	Route::get('/adminpanel/projects/delete/{id}','ProjectController@destroy');
	Route::post('/adminpanel/projects/sponsors','ProjectController@sponsors');

	//skills

	Route::get('/adminpanel/skill','SkillController@index');
	Route::get('/adminpanel/skill/index','SkillController@index');
	Route::get('/adminpanel/skill/create','SkillController@create');
	Route::post('/adminpanel/skill/store','SkillController@store');
	
	Route::get('/adminpanel/sponsors','SponsorController@index');
	Route::get('/adminpanel/sponsors/index','SponsorController@index');
	Route::get('/adminpanel/sponsors/create','SponsorController@create');
	Route::post('/adminpanel/sponsors/store','SponsorController@store');
	Route::get('/adminpanel/sponsors/delete/{id}','SponsorController@destroy');

    Route::get('/adminpanel/setting', 'SettingController@index');
    Route::post('/adminpanel/setting', 'SettingController@store');
	// route contact done
	Route::get('/adminpanel/contact' , 'ContactController@index');
	Route::get('/adminpanel/contact/delete/{id}' , 'ContactController@destroy');

	Route::get('/adminpanel/all_joiners' , 'UsersController@all_joiners');
	Route::get('/adminpanel/joinus/delete/{id}','UsersController@all_joiners_dest');
});

Route::get('/', function () {
	$projects = App\Project::all();
	$members = App\User::all();
	$sponsors = App\Suponsor::all();
    return view('welcome', compact('projects','members', 'sponsors'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/project/{id}', 'ProjectController@show');
Route::post('/contact', 'ContactController@store');
Route::get('/join_us', 'UsersController@join_us_page');
Route::post('/joinUs', 'UsersController@join_us');
