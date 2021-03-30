<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('episodes','EpisodeController@index');
Route::get('episodes/{episode}','EpisodeController@show');
// Route::post('episodes','EpisodeController@store');
Route::put('episodes/{episode}','EpisodeController@update');
Route::delete('episodes/{episode}','EpisodeController@delete');

Route::get('episodes', ['uses' => 'App\Http\Controllers\EpisodeController@index']);
Route::post('episodes', ['uses' => 'App\Http\Controllers\EpisodeController@store']);
