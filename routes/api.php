<?php

use App\Http\Controllers\API\AutfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StanController;
use App\Http\Controllers\API\UpravnikController;


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

Route::resource('upravnik', UpravnikController::class)->only('index', 'show');
Route::resource('stan', StanController::class)->only('index', 'show');
Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);


Route::group(
    ['middleware' => ['auth:sanctum']],
    function () {
        Route::resource('upravnik', UpravnikController::class)->only('store', 'destroy');
        Route::post('logout', [AutfController::class, 'logout']);
    }
);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
