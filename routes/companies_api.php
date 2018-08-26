<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Companies API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for clients. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register','RegisterController@register');

Route::group(['middleware'=>['auth:api', 'accountIsActivated']],function(){
	/********************** ads ****************************************/
	Route::resource('ads','AdController')->only('store','update','destroy');
	/************************** company meta data***********************************/
	Route::put('company-meta-data', 'CompanyMetaDataController@update');
	// Route::delete('company-meta-data/{metaData}', 'CompanyMetaDataController@destroy');
	/************************** projects ***********************************/
	Route::post('projects', 'ProjectController@store');
	Route::put('projects/{project}', 'ProjectController@update');
	Route::delete('projects/{project}', 'ProjectController@destroy');
	/************************** workdays ***********************************/
	Route::post('workdays', 'WorkDayController@store');
	Route::put('workdays/{workDay}', 'WorkDayController@update');
	Route::delete('workdays/{workDay}', 'WorkDayController@destroy');

	/************************** subscription ***********************************/
	Route::post('subscribe', 'SubscriptionController@store');
});