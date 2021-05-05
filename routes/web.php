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

Route::get('/', function () {
    return view('content');
});
Route::get('about', function () {
    return view('page.about');
});
Route::get('services', function () {
    return view('page.services');
});
Route::get('project', function () {
    return view('page.project');
});
Route::get('contact', function () {
    return view('page.contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('roles', 'App\Http\Controllers\Setting\RoleController');
    Route::get('portal', function () {
        return view('modules.dashboard');
    });
    Route::get('services', function () {
        return view('modules.services');
    });
    Route::get('modules', function () {
        return view('modules.modules');
    });
});
