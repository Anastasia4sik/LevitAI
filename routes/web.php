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
    return view('documentation');
});

Route::get('/roadmap', function () {
    return view('roadmapPage');
});

Route::get('/terms-use', function () {
    return view('terms');
});

Route::get('/privacy-policy', function () {
    return view('privacy');
});

Route::get('/contact-us', function () {
    return view('contactPage');
});

