<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
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

Route::get('/', [FilmController::class, 'home']);
Route::get('drame', [FilmController::class, 'drame']);
Route::get('action', [FilmController::class, 'action']);
Route::get('recherche', [FilmController::class, 'search']);
Route::get('film/{id}', [FilmController::class, 'show'])->name('film');
Route::get('realisateur/{realisateur}', [FilmController::class, 'realisateur'])->name('realisateur');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('basket', [UserController::class, 'show'])->name('basket.show');
});

require __DIR__.'/auth.php';
