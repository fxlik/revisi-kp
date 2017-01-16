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


// Admin
Route::get('admin', ['uses' => 'Admin2Controller@getIndex', 'as' => 'admin.index']);
Route::resource('admin/surveys', 'Admin\SurveyController', [
	'only' => ['create', 'store', 'edit', 'update', 'destroy']
]);
Route::post('admin/surveys/{id}/questions', ['uses' => 'Admin\SurveyController@storeQuestion', 'as' => 'admin.surveys.questions.store']);
Route::delete('admin/surveys/{survey_id}/questions/{question_id}', ['uses' => 'Admin\SurveyController@destroyQuestion', 'as' => 'admin.surveys.questions.destroy']);

// Public (surveys)
Route::get('surveys', 'SurveyController@getIndex');
Route::get('surveys/{id}', 'SurveyController@getSurvey');
Route::post('surveys/{id}', 'SurveyController@postSurvey');
Route::get('surveys/{id}/done', 'SurveyController@getSurveyDone');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/user', 'UserController@index');


Route::get('/admin2','AdminController@index2');
Route::get('/admin/login','AdminAuth\AuthController@showLoginForm');
Route::post('/admin/login','AdminAuth\AuthController@login');
Route::get('/admin/logout','AdminAuth\AuthController@logout');

Route::get('/admin/register','AdminAuth\AuthController@showRegisterForm');
Route::post('/admin/register', 'AdminAuth\AuthController@register');

//buat response
Route::resource('admin/respon', 'ResponseController');

//buat daerah
Route::resource('admin/daerah', 'DaerahController');

//buat responden
Route::resource('admin/responden', 'RespondenController');

