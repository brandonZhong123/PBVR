<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

Route::controller(UserController::class)->group(function () {

    // User login page
    Route::get('/', 'login')->name('users.login')->middleware('guest');

    // Users page
    Route::get('/register', 'register')->name('users.register')->middleware('guest');

    Route::get('/authenticate', 'authenticate')->name('users.authenticate')->middleware('guest');

    Route::post('/register', 'store')->name('users.store')->middleware('guest');

    Route::post('/logout', 'logout')->name('logout')->middleware('auth');


});

Route::controller(PageController::class)->group(function () {

    // User login page
    Route::get('/dashboard', 'index')->name('pages.index');


});