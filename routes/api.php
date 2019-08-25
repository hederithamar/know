<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['namespace' => 'Mobile', 'prefix' => 'mobile', 'as' => 'mobile.', 'middleware' => 'mobile'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/mobile/');
});


Route::group([
    #'prefix'     => 'sistema',
    'namespace'  => 'Backend',
    #'middleware' => 'auth:api',
], function () {
    Route::group([
        'prefix'     => 'moto',
        'namespace'  => 'Motos',
    ], function () {
        
        Route::get('getAll', 'MotoController@getAllMotos');
        Route::get('getSearch', 'MotoController@getSearchMoto');
        
        Route::get('getAnio', 'MotoController@getAnio');
        Route::get('getModelo', 'MotoController@getModelo');
        Route::get('getSubmodelo', 'MotoController@getSubmodelo');
        Route::get('getTipo', 'MotoController@getTipo');
    });

    Route::group([
        'prefix'     => 'cita',
        'namespace'  => 'CitaReparaciones',
    ], function () {
        
        Route::get('getCita', 'CitaReparacionController@getCitaCliente');
        Route::post('createCita', 'CitaReparacionController@create');

    });


    Route::group([
        'prefix'     => 'centroServicio',
        'namespace'  => 'CentroServicio',
    ], function () {
        
        Route::get('getCentros', 'CentroServiciosController@getCentros');
    });
});
