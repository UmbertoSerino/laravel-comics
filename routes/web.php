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
    $navBar = config('items-header.navbar');
    return view('home', ['navBar' => $navBar]);
});

// Route::get('/card', function () {
//     $herocards = config('db.herocards');
//     return view('partials.card', ['products' => $herocards]);
// });