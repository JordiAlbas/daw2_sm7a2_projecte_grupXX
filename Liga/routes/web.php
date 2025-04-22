<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorEquipo;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\JugadorController;
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
  
    
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/', function () {
    return view('inici');
});
Route::get('/info',function () {
    return view('info');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('teams', ControladorEquipo::class);
    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })-> name('dashboard-basic');
    Route::get('teams/index_basic', [ControladorEquipo::class, 'index_basic'])->name('teams.index_basic');
    Route::get('teams/show_basic/{id}', [ControladorEquipo::class, 'show_basic'])->name('teams.show_basic');
    Route::resource('jugadores', JugadorController::class);
    Route::get('/jugadores', [JugadorController::class, 'index'])->name('jugadores.index');
    Route::get('jugadores/{jugador}/pdf', [JugadorController::class, 'pdf'])->name('jugadores.pdf');
    Route::get('jugadores/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';
