<?php

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

Route::get('/homeincorporamento', function () {
    return view('homeincorporamento');
});
Route::get('/homecorsi', function () {
    return view('HomeCorsi');
});
Route::get('/homesanitario', function () {
    return view('HomeSanitario');
});
Route::get('/homevestiario', function () {
    return view('homevestiario');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
