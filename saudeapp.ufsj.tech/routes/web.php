<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\FormController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\SugTerapeuticaController;

Route::get('/sugestaoTerapeutica/{id}/create', [SugTerapeuticaController::class, 'create'])->middleware('auth');
Route::get('/sugestaoTerapeutica/{id}', [SugTerapeuticaController::class, 'show'])->middleware('auth');
Route::post('/sugestaoTerapeutica', [SugTerapeuticaController::class, 'store'])->middleware('auth');

Route::get('/form/{id}/results', [FormController::class, 'show'])->middleware('auth');
Route::get('/form/{id}/create', [FormController::class, 'create'])->middleware('auth');
Route::get('/form/{id}', [FormController::class, 'show'])->middleware('auth');
Route::post('/form', [FormController::class, 'store'])->middleware('auth');
//Route::post('/form', [FormController::class, 'store1'])->middleware('auth');
Route::delete('/form/{id}/delete', [FormController::class, 'destroy'])->middleware('auth');

Route::get('/welcome', [PacienteController::class, 'welcome'])->middleware('auth');
Route::get('/', [PacienteController::class, 'index']);
Route::get('/paciente/createPaciente', [PacienteController::class, 'create'])->middleware('auth');
Route::get('/paciente/{id}', [PacienteController::class, 'show'])->middleware('auth');
Route::post('/paciente', [PacienteController::class, 'store'])->middleware('auth');

