<?php

use App\Http\Controllers\VueloController;
use Illuminate\Support\Facades\Session;

Route::get('/vuelos', [VueloController::class, 'index']);
Route::get('/vuelos/{id}', [VueloController::class, 'show']);

Route::post('/tema', function () {
    $actual = session('tema', 'claro');
    $nuevo = $actual === 'oscuro' ? 'claro' : 'oscuro';
    Session::put('tema', $nuevo);
    return redirect()->back();
});