<?php

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

    $data = [
        'productsKey' => config('products'),
    ];
    // Debug data content
    // dd($data);

    return view('home', $data);
})->name('home');

Route::get('/woman', function () {
    return view('woman');
})->name('woman');

Route::get('/man', function () {
    return view('man');
})->name('man');

Route::get('/kid', function () {
    return view('kid');
})->name('kid');
