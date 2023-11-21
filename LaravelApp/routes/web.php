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
    return view('BAROQUE');
});
Route::get('/2ndPage', function () {
    return view('Page2BAROQUE');
});
Route::get('/3rdPage', function () {
    return view('Page3BAROQUE');
});
Route::get('/4thPage', function () {
    return view('Page4BAROQUE');
});
Route::get('/5thPage', function () {
    return view('Page5BAROQUE');
});
