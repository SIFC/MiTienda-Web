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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


///para crear cosas POST
Route::POST('user', 'ApiController@login');///{datos de la tienda}
Route::POST('tienda','ApiController@crearTienda');///{datos de la tienda}
Route::POST('producto', 'ApiController@crearProducto');//{datos del producto}
Route::POST('venta','ApiController@crearVenta'); ///{datos de la venta}
//para consultas GET
Route::GET('tienda', 'ApiController@getTienda'); ///{datos de la tienda}
Route::GET('producto', 'ApiController@getProducto'); //{datos del producto}
Route::GET('venta', 'ApiController@getVenta');///{datos de la venta}
//para actualizar PUT

//para borrrar DELETE
