<?php

use App\Http\Controllers\HistoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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
Route::middleware(['auth'])->group(function () {
    Route::resources([
        'historias' => HistoriaController::class
    ]);

    // Ahora las rutas de admin
    Route::prefix('admin')->group(function () {
        Route::get('/', function (Request $req) {
            Gate::authorize('admin-access');

            return view('pages.admin.home');
        })->name('admin.home');
        Route::get('/login', function () {
            return view('pages.admin.login');
        });

        Route::get('/historias', function () {
            return view('pages.admin.historias');
        })->name('admin.historias');
        Route::get('/profesores', function () {
            return view('pages.admin.profesores');
        })->name('admin.profesores');
        Route::get('/estudiantes', function () {
            return view('pages.admin.estudiantes');
        })->name('admin.estudiantes');
        Route::get('/usuarios', function () {
            return view('pages.admin.usuarios');
        })->name('admin.usuarios');
    });
});

// Esta debe ser la unica ruta de admin expuesta sin autenticacion.
Route::middleware(['guest'])->prefix('admin')->group(function () {
    Route::get('/login', function (Request $req) {
        return view('pages.admin.login');
    });
});



require __DIR__ . '/auth.php';
