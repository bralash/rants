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

Route::get('/', ['uses' => 'App\Http\Controllers\MessageController@index']);
Route::post('/message', ['uses' => 'App\Http\Controllers\MessageController@message']);
Route::get('/get-messages', ['uses' => 'App\Http\Controllers\MessageController@getMessages']);


Route::post('/upload-audio', ['uses' => 'App\Http\Controllers\AudioController@store']);
Route::get('/get-audio', ['uses' => 'App\Http\Controllers\AudioController@getAudio']);



// UI Related Routes

Route::get('/test', ['uses' => 'App\Http\Controllers\UIController@index']);
Route::post('/mailing-list', ['uses' => 'App\Http\Controllers\UIController@addToMailing']);

// Admin subdomain routing
// Route::group(['domain' => 'admin.rantsnconfess.com'], function() {
//     Route::get('/', function() {
//         print_r('This is a subdomain test');
//     });
// });

Route::domain('admin.rantsnconfess.com')->group(function() {
    Route::get('/', function() {
        print('This is a test');
    });
});