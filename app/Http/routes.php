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
/*Llamadas al controlador Auth*/
Route::get('login', 'Auth\AuthController@showLogin'); // Mostrar login
Route::post('login', 'Auth\AuthController@postLogin'); // Verificar datos
#Route::get('logout', 'Auth\AuthController@logOut'); // Finalizar sesión NO FUNCIONA
Route::get('auth/logout', 'Auth\AuthController@logout');

/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
    Route::get('/', 'HomeController@index'); // Vista de inicio
    Route::get('/panel', 'HomeController@panel'); // Vista de inicio

    Route::get('/addempresa', 'EmpresaController@viewAddEmpresa');
    Route::post('/addempresa', 'EmpresaController@store');

    Route::get('/addestructura', 'EstructuraController@viewAddEstructura');
    Route::post('/addestructura', 'EstructuraController@store');
    Route::post('/getEstructuraByIdEmpresa', 'EstructuraController@getEstructuraByIdEmpresa');

    Route::get('/adduo', 'UnidadOrganizacionalController@viewAddUO');
    Route::post('/adduo', 'UnidadOrganizacionalController@store');


    Route::resource('movie','MovieController');
});

Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);