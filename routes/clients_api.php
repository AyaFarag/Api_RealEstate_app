<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| CLIENTS API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for clients. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register','RegisterController@register');
Route::group(['middleware'=>['auth:api', 'accountIsActivated']],function(){
		/********************** comments ****************************************/
		Route::post('comments','CommentController@store');
		Route::put('comments/{comment}','CommentController@update');
		Route::delete('comments/{comment}','CommentController@destroy');
		/********************** ratings ****************************************/
		Route::post('ratings','RatingController@store');
		Route::put('ratings/{rate}','RatingController@update');
		Route::delete('ratings/{rate}','RatingController@destroy');
});
