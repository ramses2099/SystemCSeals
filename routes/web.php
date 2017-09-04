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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//StateRow
Route::get('/staterow', 'StateRow\StateRowController@index')->name('index');
Route::get('/staterow/{idstaterow?}', 'StateRow\StateRowController@show')->name('show');
Route::get('/staterows/create', 'StateRow\StateRowController@create')->name('Create');
Route::post('/staterows/create', 'StateRow\StateRowController@store')->name('Create');



Route::get('/logout',  function ()
{
   Auth::logout(); 
});


