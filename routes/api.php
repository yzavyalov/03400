<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Models\User;
use \App\Http\Controllers\Api\ProductController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResources([
//     'products' => ProductController::class,
    
// ]);

// Route::middleware('auth_api')->get('/user/{id}', function(Request $request, $id){
//     $user = User::find($id);
//     if(!$user){return response('',404);}
//     return $user;
// });

Route::middleware('auth_api')->group(function(){
    Route::get('/user/{id}', function(Request $request, $id){
        $user = User::find($id);
        if(!$user){return response('',404);}
        return $user;
    });

    Route::apiResources([
        'products' => ProductController::class,
        
    ]);  

    Route::get('/raws', 'App\Http\Controllers\Api\RawController@all');
    Route::get('/raws/{id}', 'App\Http\Controllers\Api\RawController@show');

});
