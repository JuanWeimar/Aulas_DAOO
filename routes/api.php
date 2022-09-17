<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CandidatoController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\VagaController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\LoginController;




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



Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('empresas/{id}/vagas', [EmpresaController::class, 'vagas'])
        ->name('empresas.vagas');

    Route::apiResource('vagas', VagaController::class)
        ->parameters([
            'vagas' => 'vaga'
        ]);

    Route::get('/candidato/{id}', [CandidatoController::class, 'show']);

    Route::get('empresas/{id}', [EmpresaController::class, 'show']);

    Route::group(['middleware'=>['ability:is_admin']],function(){
        Route::post('empresas', [
            EmpresaController::class, 'store'
        ]);
        Route::put('empresas/{id}', [
            EmpresaController::class, 'update'
        ]);
        Route::delete('empresas/{id}', [
            FornecedorController::class, 'delete'
        ]);
        Route::post('/candidato', [CandidatoController::class, 'store']);
        Route::put('/candidatos/{id}', [CandidatoController::class, 'update']);
        Route::delete('/candidatos/{id}', [CandidatoController::class, 'destroy']);
    });
    
  
});
Route::apiResource('usuarios', UserController::class)
        ->parameters([
            'usuarios' => 'usuario'
        ]);

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/empresas', [EmpresaController::class, 'index']);
Route::get('/candidatos', [CandidatoController::class, 'index']);