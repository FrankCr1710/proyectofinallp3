<?php

use App\Http\Controllers\CapacitacionController;
use App\Http\Controllers\ComunicacionController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\MunicipalidadController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ResponsableController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ESTABLECIMIENTO
Route::get('establecimiento/direccion', [EstablecimientoController::class, 'mostrarEstablecimiento']);

//DISTRITO
Route::get('distrito/agregar', [DistritoController::class,'agregarDistrito']);

//RESPONSABLE
Route::get('responsable/agregar', [ResponsableController::class,'agregarResponsable']);

//COMUNICACION
Route::get('comunicacion/agregar', [ComunicacionController::class, 'agregarComunicacion']);

//CAPACITACION
Route::get('capacitacion/agregar', [CapacitacionController::class, 'agregarCapacitacion']);

//MUNICIPALIDAD
Route::get('municipalidad/agregar', [MunicipalidadController::class, 'agregarMunicipalidad']);

//REPORTE
Route::get('reporte/agregar', [ReporteController::class, 'agregarReporte']);

//EVENTO
Route::get('evento/agregar', [EventoController::class, 'agregarEvento']);