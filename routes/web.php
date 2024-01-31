<?php

use App\Http\Controllers\HistoriaController;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Definimos rutas para los recursos. De una vez especificamos que todas requieren autenticacion
Route::middleware(['auth'])->group(function (){
    Route::resources([
        'historia' => HistoriaController::class
    ]);
});

require __DIR__.'/auth.php';
