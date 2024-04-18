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

Route::get('/signup', function () {
    return view('user.sign-up');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/email-verification', function () {
    return view('user.email-verification');
});
Route::get('/profile-page', function () {
    return view('user.profile-page');
});