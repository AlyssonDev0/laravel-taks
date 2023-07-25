<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\TarefasController;
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

require __DIR__.'/auth.php';

// Tarefas Controller
Route::get('dashboard', [TarefasController::class, 'index'])
->name('dashboard')->middleware('auth');

Route::get('/', [TarefasController::class, 'home'])
->name('landing-page')->middleware('auth');

Route::post('store-tarefa', [TarefasController::class, 'store'])
->name('store-tarefa')->middleware('auth');

Route::delete('destroy-tarefa/{id}', [TarefasController::class, 'destroy'])
->name('destroy-tarefa')->middleware('auth');

Route::get('editar/tarefa/{id}', [TarefasController::class, 'createUpdateTarefa'])
->name('create-update-tarefa')->middleware('auth');

Route::put('update/{id}', [TarefasController::class, 'update'])
->name('update-tarefa')->middleware('auth');

// Mudar de senha Controller
Route::get('alterar_senha', [ChangePasswordController::class, 'show'])
->name('create-update-senha')->middleware('auth');

Route::post('update-senha', [ChangePasswordController::class, 'update'])
->name('update-senha')->middleware('auth');




        

