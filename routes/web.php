<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\VagaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/ola', [HomeController::class, 'index']);
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
Route::get('/candidatos', [CandidatoController::class, 'index']);
Route::get('/candidato/{id}', [CandidatoController::class, 'show']);
Route::get('/candidato', [CandidatoController::class, 'create']);
Route::get('/candidato/{id}/edit', [CandidatoController::class, 'edit'])->name('edit_candidato');
Route::get('/candidato/{id}/delete', [CandidatoController::class, 'delete'])->name('delete');
Route::post('/candidato/{id}/update', [CandidatoController::class, 'update'])->name('update');
Route::post('/candidato', [CandidatoController::class, 'store']);
Route::get('/empresas', [EmpresaController::class, 'index']);
Route::get('/empresa/{id}', [EmpresaController::class, 'show']);
Route::get('/empresa', [EmpresaController::class, 'create']);
Route::get('/empresa/{id}/edit', [EmpresaController::class, 'edit'])->name('edit_empresa');
Route::get('/empresa/{id}/delete', [EmpresaController::class, 'delete'])->name('delete');
Route::post('/empresa/{id}/update', [EmpresaController::class, 'update'])->name('update');
Route::post('/empresa', [EmpresaController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/vagas', [VagaController::class, 'index'])->name('vagas');
Route::get('/vaga/{id}', [VagaController::class, 'show']);
Route::get('/vaga', [VagaController::class, 'create']);
Route::get('/vaga/{id}/edit', [VagaController::class, 'edit'])->name('edit');
Route::get('/vaga/{id}/delete', [VagaController::class, 'delete'])->name('delete');
Route::post('/vaga/{id}/update', [VagaController::class, 'update'])->name('update');
Route::post('/vaga', [VagaController::class, 'store']);
});


require __DIR__.'/auth.php';
