<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'demo', 'middleware' => 'auth'], function()
{
    Route::get('/', function() {
        return redirect('/demo/guide');
    });

    Route::get('login', function() {
        return view('demo/login', ['has_submenu' => false]);
    })->name('login-demo');

    Route::get('personal-data', function() {
        return view('demo/personal_data', ['has_submenu' => true]);
    })->name('personal-data');

    Route::get('find-boern', function() {
        return view('demo/findBoern', ['has_submenu' => false]);
    })->name('find-boern');

    Route::get('messages', function() {
        return view('demo/messages', ['has_submenu' => false]);
    })->name('messages');

    Route::get('readmessage', function() {
        return view('demo/readmessages', ['has_submenu' => false]);
    })->name('readmessages');

    Route::get('tabulex-basic-grid', function() {
        return view('demo/tabulex_basic_grid', ['has_submenu' => true]);
    })->name('basic-grid');

    Route::get('children-grid', function() {
        return view('demo/childrenGrid', ['has_submenu' => true]);
    })->name('children-grid');

    Route::get('checkin', function() {
        return view('demo/checkIn', ['has_submenu' => true]);
    })->name('checkin');

    Route::get('gallery', function() {
        return view('demo/gallery', ['has_submenu' => false]);
    })->name('gallery');

    Route::get('guide', 'GuidesController@index')
        ->name('guide');

//    Route::get('guide', 'GuidesController@index', function() {
//        return view('demo/guide', ['has_submenu' => false]);
//    })->name('guide');

    // New foraeldre group
    Route::group(['prefix' => 'foraeldre'], function()
    {
        Route::get('opslagstavle', 'ParentDesktopController@index')
            ->name('parents-desktop');
    });
});


