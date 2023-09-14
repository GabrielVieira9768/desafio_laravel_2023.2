<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect(route('dashboard'));
});

/* Rotas teste - INÍCIO */

/* Listas */
Route::get('/gerenciamento-de-funcionarios', function () {
    return view('/admin/users/index');
});

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

/* Rotas das Consultas */

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
