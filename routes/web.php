<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\TarefasController;

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

Route::get('/', [TarefasController::class, 'index'])
->name('dashboard')->middleware('auth');

require __DIR__.'/auth.php';

Route::get('cadastrar-tarefa', [TarefasController::class, 'create'])
->name('cadastrar-tarefa')->middleware('auth');

Route::post('store-tarefa', [TarefasController::class, 'store'])
->name('store-tarefa')->middleware('auth');

Route::delete('destroy-tarefa/{id}', [TarefasController::class, 'destroy'])
->name('destroy-tarefa')->middleware('auth');

Route::get('editar/tarefa/{id}', [TarefasController::class, 'createUpdateTarefa'])
->name('create-update-tarefa')->middleware('auth');

Route::put('update/{id}', [TarefasController::class, 'update'])
->name('update-tarefa')->middleware('auth');




        

