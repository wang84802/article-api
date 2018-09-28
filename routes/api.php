<?php

use Illuminate\Http\Request;
use App\Article;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 * */
Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
	
//	Auth::guard('api')->user();
//	Auth::guard('api')->check();
//	Auth::guard('api')->id();

   
    });
/*
Auth::guard('api')->user();
Auth::guard('api')->check();
Auth::guard('api')->id();
 */

Route::post('login','Auth\LoginController@login');

Route::post('logout','Auth\LoginController@logout');

Route::post('register','Auth\RegisterController@register');


Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/articles','ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles','ArticleController@store');
    Route::post('articles/{article}','ArticleController@update');
    Route::delete('articles/{article}','ArticleController@delete');
});
