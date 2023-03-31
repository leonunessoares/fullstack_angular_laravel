<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\PessoaController;

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

Route::prefix('pessoa')->group(function () {
    Route::get('/',[ PessoaController::class, 'getAll']);
    Route::post('/',[ PessoaController::class, 'create']);
    Route::delete('/{id}',[ PessoaController::class, 'delete']);
    Route::get('/{id}',[ PessoaController::class, 'get']);
    Route::put('/{id}',[ PessoaController::class, 'update']);
});
