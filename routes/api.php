<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Setting\{RoleController};
use App\Http\Controllers\ServiceController;
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
Route::get('/getServices', [ServiceController::class, 'getServices']);
Route::apiResource('roles', RoleController::class);
Route::group(['prefix' => 'api'], function () {
    //** CRUD settings **/
    Route::apiResource('roles', RoleController::class);
    Route::get('/getServices', [ServiceController::class, 'getServices']);
});
