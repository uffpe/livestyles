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
    });

    Route::get('personal-data', function() {
        return view('demo/personal_data', ['has_submenu' => true]);
    });

    Route::get('child-grid', function() {
        return view('demo/child_grid', ['has_submenu' => false]);
    });

    Route::get('tabulex-basic-grid', function() {
        return view('demo/tabulex_basic_grid', ['has_submenu' => false]);
    });

    Route::get('guide', 'GuidesController@index');
});
