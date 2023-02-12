<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PorudzbinaController;
use App\Http\Controllers\ProdavnicaController;
use App\Http\Controllers\ProizvodiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/proizvodi',ProizvodiController::class);

Route::resource('/prodavnice',ProdavnicaController::class);

Route::resource('/porudzbine',PorudzbinaController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::resource('porudzbine', PorudzbinaController::class)->only(['update','store','destroy']);
    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});




