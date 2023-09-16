<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\http\Controllers\UserController;
use App\http\Controllers\OwnerController;
use App\http\Controllers\AnimalController;
use App\http\Controllers\AppointmentController;

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
    return redirect(route('home'));
});

/* Rotas teste - INÍCIO */

/* Rotas dos Usuários */
Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('users.create');
Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('users.show');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('users.destroy');

/* Rotas dos Proprietários */
Route::get('/proprietarios', [OwnerController::class, 'index'])->name('owners.index');
Route::get('/proprietarios/create', [OwnerController::class, 'create'])->name('owners.create');
Route::get('/proprietarios/{owner}/edit', [OwnerController::class, 'edit'])->name('owners.edit');
Route::get('/proprietarios/{owner}', [OwnerController::class, 'show'])->name('owners.show');
Route::post('/owners', [OwnerController::class, 'store'])->name('owners.store');
Route::put('/owners/{owner}', [OwnerController::class, 'update'])->name('owners.update');
Route::delete('/proprietarios/{owner}', [OwnerController::class, 'destroy'])->name('owners.destroy');

/* Rotas dos Animais */
Route::get('/animais', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animais/create', [AnimalController::class, 'create'])->name('animals.create');
Route::get('/animais/{owner}/edit', [AnimalController::class, 'edit'])->name('animails.edit');
Route::get('/animais/{owner}', [AnimalController::class, 'show'])->name('animals.show');
Route::post('/animais', [AnimalController::class, 'store'])->name('animals.store');
Route::put('/animais/{owner}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animais/{owner}', [AnimalController::class, 'destroy'])->name('animals.destroy');

/* Rotas das Consultas */
Route::get('/consultas', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/consultas/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::get('/consultas/{owner}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::get('/consultas/{owner}', [AppointmentController::class, 'show'])->name('appointments.show');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::put('/appointments/{owner}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::delete('/consultas/{owner}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

/* Rotas teste - FIM */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');