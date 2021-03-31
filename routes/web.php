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

// Subdomain routes 
Route::group([
    'domain' => 'admin.' . env('APP_URL')],function() {
    Route::get('/login', ['as' => 'login','uses' => 'App\Http\Controllers\AdminController@showLogin']);
    Route::prefix('auth')->group(function() {
        Route::post('/login', ['uses' => 'App\Http\Controllers\AdminController@login']);
        Route::get('/logout', ['uses' => 'App\Http\Controllers\AdminController@logout']);
    });
    Route::middleware('auth')->group(function() {
        Route::get('/', ['uses' => 'App\Http\Controllers\AdminController@index']);
    });
});


// Domain routes

Route::group([
    'domain' => env('APP_URL')], function() {
    

        Route::get('/', ['uses' => 'App\Http\Controllers\MessageController@index']);
        Route::post('/message', ['uses' => 'App\Http\Controllers\MessageController@message']);
        Route::get('/get-messages', ['uses' => 'App\Http\Controllers\MessageController@getMessages']);
        
        
        Route::post('/upload-audio', ['uses' => 'App\Http\Controllers\AudioController@store']);
        Route::get('/get-audio', ['uses' => 'App\Http\Controllers\AudioController@getAudio']);
        
        
        
        // UI Related Routes
        
        Route::get('/test', ['uses' => 'App\Http\Controllers\UIController@index']);
        Route::post('/mailing-list', ['uses' => 'App\Http\Controllers\UIController@addToMailing']);
});


