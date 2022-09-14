<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CandidatoController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\VagaController;




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
Route::get('/candidatos', [CandidatoController::class, 'index']);
Route::get('/candidato/{id}', [CandidatoController::class, 'show']);
Route::post('/candidato', [CandidatoController::class, 'store']);
Route::put('/candidatos/{id}', [CandidatoController::class, 'update']);
Route::delete('/candidatos/{id}', [CandidatoController::class, 'destroy']);

Route::apiResource('empresas', EmpresaController::class)
    ->parameters([
        'empresas' => 'empresa'
    ]);

Route::apiResource('vagas', VagaController::class)
    ->parameters([
        'vagas' => 'vaga'
    ]);

Route::get('empresas/{id}/vagas', [EmpresaController::class, 'vagas'])
    ->name('empresas.vagas');
//Route::get('/empresas', [EmpresaController::class, 'index']);