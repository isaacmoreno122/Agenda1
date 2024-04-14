<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\CorreoController;

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
    return view('layouts.principal');
});

Route::get('/personas', function () {
    return view('personas.index');
});

// Route::get('/Telefono/{id}', function () {
//     return view('Telefono.index');
// });

Route::resource('/personas', 'App\Http\Controllers\PersonaController');
Route::resource('Telefono', 'App\Http\Controllers\TelefonoController');
Route::get('/Telefono/{id}/create', [TelefonoController::class, 'create']);



Route::get('/Telefono/{id}/eliminar', [TelefonoController::class, 'eliminar']);

Route::resource('Correo', 'App\Http\Controllers\CorreoController');
Route::get('/Correo/{id}/create', [CorreoController::class, 'create']);



Route::get('/Correo/{id}/eliminar', [CorreoController::class, 'eliminar']);


// Route::get('/Telefono/{id}',[TelefonoController::class,'index']);

// Route::resource('/Telefono/{id}', 'App\Http\Controllers\TelefonoController');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
