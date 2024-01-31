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
    $dcComicsList = config('items-footer.dcComicsList');
    $shopList = config('shopList-footer.shopList');
    $dcList = config('dcList-footer.dcList');
    $sitesList = config('sitesList-footer.sitesList');
    $heroCards = config('herocards.heroCards');
    return view('/layouts/home', compact('navBar', 'dcComicsList', 'shopList', 'dcList', 'sitesList', 'heroCards'));
});
