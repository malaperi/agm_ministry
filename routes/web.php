<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('site')->name("site.")->group(function(){
    Route::controller(App\Http\Controllers\Site\HomeController::class)->group(function(){
        Route::get('about-us','aboutus')->name('about-us');
        Route::post('search-home','searchField')->name('search-home');

    });
});

Route::prefix('admin')->middleware('auth')->name('auth.')->group(function(){
    Route::controller(App\Http\Controllers\Admin\DashboardController::class)->group(function(){
        Route::get('dashboard','index')->name('dashboard');

    });
});
