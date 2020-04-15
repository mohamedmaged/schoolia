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

Route::middleware('auth:api')->get('/student', function (Request $request) {
    return $request->user();
});



// start api online admission
Route::group([
    'prefix' => 'online-admission',
    "namespace"=>"API"

], function ($router) { 

   $router->post("/","OnlineAdmissionController@store");

});





