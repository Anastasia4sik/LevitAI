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

    Route::get('/metaverse', function () {
        return view('components/discover/metaverse');
    });

    Route::get('/partners', function () {
        return view('components/discover/partners');
    });

    Route::get('/integrations', function () {
        return view('components/discover/integrations');
    });

    Route::get('/economy', function () {
        return view('components/discover/economy');
    });

//world
    Route::get('/what-is-levitai-world', function () {
        return view('components/world/what-is');
    });

    Route::get('/levi-lands', function () {
        return view('components/world/lands');
    });

    Route::get('/building-the-future', function () {
        return view('components/world/future');
    });

    Route::get('/dao-economy', function () {
        return view('components/world/dao');
    });

    Route::get('/why-levitai', function () {
        return view('components/world/why-levitai');
    });

    Route::get('/exchange-market', function () {
        return view('components/world/exchange');
    });

    Route::get('/exchange-market/item-', function () {
        return view('components/world/exchange-item');
    });

//account
    Route::get('/register', function () {
        return view('components/account/register');
    });

    Route::get('/sign-in', function () {
        return view('components/account/sign-in');
    });

    Route::get('/avatar', function () {
        return view('components/account/avatar');
    });

    Route::get('/avatar/edit', function () {
        return view('components/account/avatar-edit');
    });

    Route::get('/account', function () {
        return view('components/account/account');
    });

    Route::get('/account/edit', function () {
        return view('components/account/account-edit');
    });

    Route::get('/referral', function () {
        return view('components/account/referral');
    });

    Route::get('/referral/transactions', function () {
        return view('components/account/transactions-big');
    });

    Route::get('/my-events', function () {
        return view('components/account/events');
    });

    Route::get('/messages', function () {
        return view('components/account/messages');
    });

    Route::get('/wallet', function () {
        return view('components/account/wallet');
    });

    Route::get('/friends', function () {
        return view('components/account/friends');
    });

