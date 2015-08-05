<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 *
 * Routes for login
 *
 */

Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);


Route::any('/{code}/{id}/{value}','DataController@create');
Route::get('/test/{id}','DataController@show');


Route::group(array('before' => 'auth'), function() {

    Route::get('/',['as' => 'home','uses' => 'UsersController@index']);


});


