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
Route::get('/staterow/{idstaterow?}/edit', 'StateRow\StateRowController@edit')->name('edit');
Route::post('/staterow/{idstaterow?}/edit', 'StateRow\StateRowController@update')->name('edit');

//SealsCatogory
Route::get('/sealscatogorys', 'SealsCategory\SealsCategoryController@index')->name('index');
Route::get('/sealscatogorys/create', 'SealsCategory\SealsCategoryController@create')->name('Create');
Route::get('/sealscatogorys/{idsealscatogory?}', 'SealsCategory\SealsCategoryController@show')->name('show');
Route::post('/sealscatogorys/create', 'SealsCategory\SealsCategoryController@store')->name('Create');
Route::get('/sealscatogorys/{idsealscatogory?}/edit', 'SealsCategory\SealsCategoryController@edit')->name('edit');
Route::post('/sealscatogorys/{idsealscatogory?}/edit', 'SealsCategory\SealsCategoryController@update')->name('edit');

//SealsProcess
Route::get('/sealsprocess', 'SealsProcess\SealsProcessController@index')->name('index');
Route::get('/sealsprocess/create', 'SealsProcess\SealsProcessController@create')->name('Create');
Route::get('/sealsprocess/{idsealsprocess?}', 'SealsProcess\SealsProcessController@show')->name('show');
Route::post('/sealsprocess/create', 'SealsProcess\SealsProcessController@store')->name('Create');
Route::get('/sealsprocess/{idsealsprocess?}/edit', 'SealsProcess\SealsProcessController@edit')->name('edit');
Route::post('/sealsprocess/{idsealsprocess?}/edit', 'SealsProcess\SealsProcessController@update')->name('edit');

//SealsType
Route::get('/sealstypes', 'SealsType\SealsTypeController@index')->name('index');
Route::get('/sealstypes/create', 'SealsType\SealsTypeController@create')->name('Create');
Route::get('/sealstypes/{idsealstype?}', 'SealsType\SealsTypeController@show')->name('show');
Route::post('/sealstypes/create', 'SealsType\SealsTypeController@store')->name('Create');
Route::get('/sealstypes/{idsealstype?}/edit', 'SealsType\SealsTypeController@edit')->name('edit');
Route::post('/sealstypes/{idsealstype?}/edit', 'SealsType\SealsTypeController@update')->name('edit');

//VesselVisits
Route::get('/vesselvisits', 'VesselVisits\VesselVisitController@index')->name('index');
Route::get('/vesselvisits/create', 'VesselVisits\VesselVisitController@create')->name('Create');
Route::get('/vesselvisits/{idvesselvisits?}', 'VesselVisits\VesselVisitController@show')->name('show');
Route::post('/vesselvisits/create', 'VesselVisits\VesselVisitController@store')->name('Create');
Route::get('/vesselvisits/{idvesselvisits?}/edit', 'VesselVisits\VesselVisitController@edit')->name('edit');
Route::post('/vesselvisits/{idvesselvisits?}/edit', 'VesselVisits\VesselVisitController@update')->name('edit');



Route::get('/logout',  function ()
{
   Auth::logout(); 
});


