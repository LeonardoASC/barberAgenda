<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user
Route::resource('dadospessoais', App\Http\Controllers\DadoPessoalController::class);
Route::resource('servico', App\Http\Controllers\ServicoController::class);
// routes/web.php
Route::get('subservices',[App\Http\Controllers\ServicoController::class, 'getSubServices'])->name('servico.getSubServices');

Route::resource('agendamento', App\Http\Controllers\AgendamentoController::class);
// adm
Route::resource('horario', App\Http\Controllers\HorarioController::class);
Route::resource('tarefa', App\Http\Controllers\TarefaController::class);
Route::resource('tarefaespec', App\Http\Controllers\TarefaEspecController::class);


