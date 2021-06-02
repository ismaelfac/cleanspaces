<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ HomeController, QuoteController, ServiceController };
Route::resource('/', HomeController::class);

Route::get('about', function () {
    return view('page.about');
});

Route::get('project', function () {
    return view('page.project');
});
Route::get('contact', function () {
    return view('page.contact');
});
Route::resource('quotes', QuoteController::class);
Route::resource('services', ServiceController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('roles', 'App\Http\Controllers\Setting\RoleController');
    Route::get('portal', function () {
        return view('modules.dashboard');
    });
    Route::get('modules', function () {
        return view('modules.modules');
    });
});
