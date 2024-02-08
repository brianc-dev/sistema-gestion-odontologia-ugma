<?php

use App\Http\Controllers\HistoriaController;
use App\Models\Historia;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome')->middleware(['guest'])->name('welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Definimos rutas para los recursos. De una vez especificamos que todas requieren autenticacion
Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', function (Request $request) {
        switch (Auth::user()->role_id) {
            case 0:
                return to_route('admin.home');
            case 2:
                return view('pages.profesor.home');
            case 3:
                return view('home');
            default:
                abort(403);
        }
    })->name('dashboard');

    Route::get('home', function (Request $request) {
        switch (Auth::user()->role_id) {
            case 0:
                return to_route('admin.home');
            case 2:
                return view('pages.profesor.home');
            case 3:
                return view('home');
            default:
                abort(403);
        }
    })->name('home');

//    Route::get('estudiantes', function () {
//        abort_unless(Auth::user()->role_id == 2, 401);
//
//        return view('pages.profesor.estudiante');
//    })->name('estudiante');

    Route::get('estudiantes/{estudiante}', function (string $id){
        $estudiante = \App\Models\Estudiante::findOrFail($id);

        return view('pages.estudiante.show', ['estudiante' => $estudiante]);
    })->name('estudiante.show');

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

        Route::resource('historias', HistoriaController::class)->names([
            'index' => 'admin.historias',
            'store' => 'admin.historias.store',
            'create' => 'admin.historias.create',
            'show' => 'admin.historias.show',
            'update' => 'admin.historias.update',
            'destroy' => 'admin.historias.destroy',
            'edit' => 'admin.historias.edit'
        ]);

//        Route::get('/historias', function () {
//            return view('pages.admin.historias');
//        })->name('admin.historias');
//
//        Route::get('/historias/{id}', function (string $id) {
//            $historia = Historia::findOrFail($id);
//
//            return view('pages.admin.historia.show', ['historia' => $historia]);
//        })->name('admin.historias.show');

        Route::get('/profesores', function () {
            return view('pages.admin.profesores');
        })->name('admin.profesores');

        Route::get('/profesores/{profesor}', function (Profesor $profesor) {
            return view('pages.admin.profesor.edit', ['profesor' => $profesor]);
        })->name('admin.profesores.edit');

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
    })->name('admin.login');
});



require __DIR__ . '/auth.php';
