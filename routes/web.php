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
    return view('website.index', ['hero_img' => asset('assets/images/1.png')]);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('website.about', ['hero_img' => asset('assets/images/about-header.png')]);
});


Route::get('/contact', function () {
    return view('website.contact', ['hero_img' => asset('assets/images/1.png')]);
});

Route::get('/career', function () {
    return view('website.career', ['hero_img' => asset('assets/images/1.png')]);
});
Route::get('/employee-testimonials', function () {
    return view('website.employee-testimonials', ['hero_img' => asset('assets/images/1.png')]);
});

Route::get('/job-openings', function () {
    return view('website.job-openings', ['hero_img' => asset('assets/images/job-openings.png')]);
});

Route::get('/life-at-enernew', function () {
    return view('website.life-at-enernew', ['hero_img' => asset('assets/images/life-enernew.png')]);
});

Route::get('/pr', function () {
    return view('website.pr', ['hero_img' => asset('assets/images/1.png')]);
});

Route::get('/blogs', function () {
    return view('website.blog', ['hero_img' => asset('assets/images/1.png')]);
});




Route::get('/form_submit', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/admin/form_view', [App\Http\Controllers\FormController::class, 'show'])->name('form.show');

