<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\http\Controllers\UserController;
use App\http\Controllers\OwnerController;
use App\http\Controllers\AnimalController;
use App\http\Controllers\AppointmentController;
use App\http\Controllers\EmailController;
use App\http\Controllers\PdfController;

/* Rotas teste - INÍCIO */

/* Rota da Home */
Route::get('/', function () {
    return redirect(route('home'));
})->middleware(['auth', 'verified'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Verifica se está logado
Route::middleware('auth')->group(function () {

    /* Rotas dos Usuários */
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index')->can('ehAdmin', '\App\Models\User');
    Route::get('/usuarios/create', [UserController::class, 'create'])->name('users.create')->can('ehAdmin', '\App\Models\User');
    Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->can('ehAdmin', '\App\Models\User');
    Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('users.show')->can('ehAdmin', '\App\Models\User');
    Route::post('/usuarios', [UserController::class, 'store'])->name('users.store')->can('ehAdmin', '\App\Models\User');
    Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('users.update')->can('ehAdmin', '\App\Models\User');
    Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('users.destroy')->can('ehAdmin', '\App\Models\User');

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
    Route::get('/animais/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
    Route::get('/animais/{animal}', [AnimalController::class, 'show'])->name('animals.show');
    Route::post('/animais', [AnimalController::class, 'store'])->name('animals.store');
    Route::put('/animais/{animal}', [AnimalController::class, 'update'])->name('animals.update');
    Route::delete('/animais/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');

    /* Rotas das Consultas */
    Route::get('/consultas', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/consultas/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::get('/consultas/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::get('/consultas/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/consultas/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    /* Rotas dos Emails */
    Route::get('/email', [EmailController::class, 'index'])->name('email.index');
    Route::post('/email', [EmailController::class, 'store'])->name('email.store');

    /* Rota do PDF */
    Route::get('/pdf', [PdfController::class, 'criaPdf'])->name('pdf.index');

    /* Rotas teste - FIM */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Termina verificação de login

require __DIR__.'/auth.php';

Auth::routes();