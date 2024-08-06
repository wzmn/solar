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
    return view('website.index', ['hero_img' => [asset('assets/images/1.png'), asset('assets/images/video-slide.png'), asset('assets/images/slider-3.jpg')]]);
})->name('home');

Auth::routes();

Route::get('/about-us', function () {
    return view('website.about', ['hero_img' => [asset('assets/images/about-header.png')]]);
})->name('about-us');

Route::get('/solar-calculator', function () {
    return view('website.coming-soon', ['hero_img' => [asset('assets/images/about-header.png')]]);
});

Route::get('/contact-us', function () {
    return view('website.contact', ['hero_img' => [asset('assets/images/contact-us.png')]]);
});

Route::get('/careers', function () {
    return view('website.career', ['hero_img' => [asset('assets/images/career.png')]]);
});

Route::get('/employee-testimonials', function () {
    return view('website.employee-testimonials', ['hero_img' => [asset('assets/images/employee-testimonials.png')]]);
});

Route::get('/job-openings', function () {
    return view('website.job-openings', ['hero_img' => [asset('assets/images/job-openings.png')]]);
});

Route::get('/life-at-enernew', function () {
    return view('website.life-at-enernew', ['hero_img' => [asset('assets/images/life-enernew.png')]]);
});

Route::get('/press-release', function () {
    return view('website.pr', ['hero_img' => [asset('assets/images/press-release.png')]]);
});

Route::get('/knowledge-center', function () {
    return view('website.blog', ['hero_img' => [asset('assets/images/blog-header.png')]]);
});

Route::get('/privacy', function () {
    return view('website.privacy', ['hero_img' => [asset('assets/images/privacy-policy.jpg')]]);
});

Route::get('/terms-of-use', function () {
    return view('website.terms-of-use', ['hero_img' => [asset('assets/images/terms-of-use.jpg')]]);
});

Route::get('/b2b-solar-solutions', function () {
    return view('website.b2b', ['hero_img' => [asset('assets/images/b2b.png')]]);
});

Route::get('/asset-management-services', function () {
    return view('website.asset-management', ['hero_img' => [asset('assets/images/asset.png')]]);
});

Route::get('/utility-scale-solar-power-park-solutions', function () {
    return view('website.solar-solutions', ['hero_img' => [asset('assets/images/utility-scale.png')]]);
});

Route::get('/our-solutions', function () {
    return view('website.coming-soon', ['hero_img' => [asset('assets/images/about-header.png')]]);
});


Route::get('/blog/solar-technologies-and-techniques', function () {
    return view('website.blog-why-off-site-solar-parks-are-the-future-of-renewable-energy');
});
Route::get('/blog/embracing-sustainability-with-solar-energy-and-its-environmental-benefits', function () {
    return view('website.blog-embracing-sustainability-with-solar-energy-and-its-environmental-benefits');
});



Route::get('/form_submit', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/admin/form_view', [App\Http\Controllers\FormController::class, 'show'])->name('form.show');

