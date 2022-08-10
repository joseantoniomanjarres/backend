<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PropietarioController;
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
Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});

Route::prefix('propietario')->group(function () {
    Route::get('/',[ PropietarioController::class, 'getAll']);
    Route::post('/',[ PropietarioController::class, 'create']);
    Route::delete('/{id}',[ PropietarioController::class, 'delete']);
    Route::get('/{id}',[ PropietarioController::class, 'get']);
    Route::put('/{id}',[ PropietarioController::class, 'update']);
});