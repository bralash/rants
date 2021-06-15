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

// Subdomain routes - Admin 
Route::group([
    'domain' => 'admin.' . env('APP_URL')],function() {
        
        Route::get('/login', ['as' => 'login','uses' => 'App\Http\Controllers\AdminController@showLogin']);
        Route::prefix('auth')->group(function() {
            Route::post('/login', ['uses' => 'App\Http\Controllers\AdminController@login']);
            Route::get('/logout', ['uses' => 'App\Http\Controllers\AdminController@logout']);
        });
        Route::middleware('auth')->group(function() {
            Route::get('/', ['uses' => 'App\Http\Controllers\AdminController@index']);
            Route::get('/episodes', ['uses' => 'App\Http\Controllers\AdminController@episodes']);
            Route::get('/episode/{slug}', ['uses' => 'App\Http\Controllers\AdminController@getEpisode']);
            Route::get('/confessions', ['uses' => 'App\Http\Controllers\AdminController@confessions']);
            Route::get('/archive-confessions', ['uses' => 'App\Http\Controllers\AdminController@archive']);
            Route::post('/update-episode/{id}', ['uses' => 'App\Http\Controllers\AdminController@updateEpisode']);
        });
});


// Domain routes

Route::group([
    'domain' => env('APP_URL')], function() {
    

        // Route::get('/', ['uses' => 'App\Http\Controllers\MessageController@index']);
        // Route::post('/message', ['uses' => 'App\Http\Controllers\MessageController@message']);
        
        
        
        Route::post('/upload-audio', ['uses' => 'App\Http\Controllers\AudioController@store']);
        Route::get('/get-audio', ['uses' => 'App\Http\Controllers\AudioController@getAudio']);
        
        
        
        // UI Related Routes
        
        Route::get('/', ['uses' => 'App\Http\Controllers\UIController@index']);
        Route::get('/contact', ['uses' => 'App\Http\Controllers\UIController@contact']);
        Route::get('/donate', ['uses' => 'App\Http\Controllers\UIController@donate']);
        Route::get('/episodes', ['uses' => 'App\Http\Controllers\UIController@episodes']);
        Route::get('/episode/{slug}', ['uses' => 'App\Http\Controllers\UIController@getEpisode']);
        Route::get('/confess', ['uses' => 'App\Http\Controllers\UIController@confession']);
        Route::get('/season/{id}', ['uses' => 'App\Http\Controllers\UIController@seasons']);
        Route::get('/segment/{slug}', ['uses' => 'App\Http\Controllers\UIController@segment']);
        Route::post('/confess', ['uses' => 'App\Http\Controllers\UIController@storeConfession']);
        Route::post('/upload-audio', ['uses' => 'App\Http\Controllers\AudioController@store']);
        Route::post('/mailing-list', ['uses' => 'App\Http\Controllers\UIController@addToMailing']);
        Route::post('/contact', ['uses' => 'App\Http\Controllers\UIController@getInTouch']);
        Route::get('/cfx', ['uses' => 'App\Http\Controllers\MessageController@getMessages']);
});


