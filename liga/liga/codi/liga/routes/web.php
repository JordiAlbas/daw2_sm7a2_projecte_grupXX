<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorEquipo;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\UsuarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('/', function () {
    return view('inici');
});

Route::get('/info', function () {
    return view('info');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/users', [UsuarioController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [UsuarioController::class, 'destroy'])->name('users.destroy');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })->name('dashboard-basic');

    Route::resource('teams', ControladorEquipo::class);

    Route::get('teams/index_basic', [ControladorEquipo::class, 'index_basic'])->name('teams.index_basic');
    Route::get('teams/show_basic/{id}', [ControladorEquipo::class, 'show_basic'])->name('teams.show_basic');


    Route::resource('jugadores', JugadorController::class)->parameters([
        'jugadores' => 'jugador'
    ]);
    Route::get('/jugadores/{jugador}', [JugadorController::class, 'show'])->name('jugadores.show');

    Route::get('jugadores/{jugador}/pdf', [JugadorController::class, 'pdf'])->name('jugadores.pdf');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
