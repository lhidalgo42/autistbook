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





Route::group(array('before' => 'auth'), function() {

    Route::get('/',['as' => 'menu','uses' => 'UsersController@home']);
    Route::get('/home/{id}',['as' => 'home','uses' => 'UsersController@index']);
    Route::get('/alerts/{id}',['as' => 'alerts','uses' => 'AlertsController@index']);
    Route::get('/charts/{id}/day',['as' => 'charts','uses' => 'ChartsController@day']);
    Route::get('/charts/{id}/week',['as' => '','uses' => 'ChartsController@week']);
    Route::get('/charts/{id}/month',['as' => 'alerts','uses' => 'ChartsController@month']);
    Route::get('/specialists/','SpecialistsController@index');
    Route::get('/file/{id}','FileController@show');
    route::get('/dictionary','DictionariesController@index');
    route::get('/dictionary/add','DictionariesController@create');
    route::get('/dictionary/{id}','DictionariesController@show');
});
Route::post('/dictionary/query','DictionariesController@search');

Route::any('/{code}/{id}/{value}','DataController@create');


