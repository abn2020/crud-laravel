<?php

use App\Http\Controllers\PacientesController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('pacientes/agendar', [PacientesController::class, 'create'])->name('pacientes-agendar');

Route::post('pacientes/agendar', [PacientesController::class, 'insert'])->name('pacientes-agendar');

Route::get('pacientes-descricao/{id}', [PacientesController::class, 'show'])->name('pacientes-descricao');

Route::get('pacientes/{paciente}/edit', [PacientesController::class, 'edit'])->name('pacientes-edit');

Route::put('pacientes/{paciente}', [PacientesController::class, 'editar'])->name('pacientes-editar');

Route::get('pacientes/{paciente}/delete', [PacientesController::class, 'modal'])->name('pacientes-modal');

Route::delete('pacientes/{paciente}', [PacientesController::class, 'delete'])->name('pacientes-delete');

Route::post('pacientes', [UsuariosController::class, 'login'])->name('usuarios.login');

Route::get('/', [UsuariosController::class, 'logout'])->name('usuarios.logout');

Route::get('pacientes', [PacientesController::class, 'index'])->name('pacientes') ;



