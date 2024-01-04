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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});

Route::get('/documentation', function () {
    return view('documentation/documentation');
});

Route::get('/roadmap', function () {
    return view('documentation/roadmapPage');
});

Route::get('/terms-use', function () {
    return view('documentation/terms');
});

Route::get('/privacy-policy', function () {
    return view('documentation/privacy');
});


Route::get('/contact-us', function () {
    return view('community/contactPage');
});

Route::get('/faq', function () {
    return view('community/faq');
});

Route::get('/blog/post-', function () {
    return view('community/blogPage');
});