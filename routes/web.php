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
    return view('website.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('website.about');
});


Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/job-openings', function () {
    return view('website.career');
});



Route::get('/form_submit', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/admin/form_view', [App\Http\Controllers\FormController::class, 'show'])->name('form.show');

