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

//documentation

    Route::get('/documentation', function () {
        return view('components/documentation/documentation');
    });

    Route::get('/roadmap', function () {
        return view('components/documentation/roadmapPage');
    });

    Route::get('/terms-use', function () {
        return view('components/documentation/terms');
    });

    Route::get('/privacy-policy', function () {
        return view('components/documentation/privacy');
    });

//community

    Route::get('/contact-us', function () {
        return view('components/community/contactPage');
    });

    Route::get('/faq', function () {
        return view('components/community/faq');
    });

    Route::get('/blog', function () {
        return view('components/community/blogPage');
    });

    Route::get('/blog/post-', function () {
        return view('components/community/postPage');
    });

    Route::get('/team', function () {
        return view('components/community/teamPage');
    });

    Route::get('/about-us', function () {
        return view('components/community/aboutPage');
    });

    Route::get('/events', function () {
        return view('components/community/eventsPage');
    });

    Route::match(['get'], '/events/{type}', function ($type) {
        return view('components/community/eventsSection');
    })->where('type', 'sports|concerts|performances|courses')->name('events');

    Route::get('/events/event-', function () {
        return view('components/community/event');
    });

//discover
    Route::get('/our-vision', function () {
        return view('components/discover/vision');
    });

