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
Route::get('preguntas_frecuentes', function () {
    return view('modules.services.frequentQuestions');
});
Route::get('piscinas', function () {
    return view('modules.services.piscinas');
});
Route::get('tanques', function () {
    return view('modules.services.tanques');
});
Route::get('impermeabilizacion', function () {
    return view('modules.services.impermeabilizacion');
});
Route::get('lavado_limpieza', function () {
    return view('modules.services.lavado_limpieza');
});
Route::get('mantenimientos_locativos', function () {
    return view('modules.services.mantenimientos_locativos');
});
Route::get('jardineria', function () {
    return view('modules.services.jardineria');
});
Route::get('aires_acondicionados', function () {
    return view('modules.services.aires_acondicionados');
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
