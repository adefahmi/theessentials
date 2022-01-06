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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', "");

Route::get('/', 'appController@index');
//Route::get('video/{type}', 'appController@video');

Route::get('tentang-kami','appController@aboutUs');

Route::prefix('daru')->group(function (){
    Route::get('','appController@daruIndex');
    Route::get('nyaman','appController@daruNyaman');
    Route::get('asri','appController@daruAsri');
    Route::get('zhouse','appController@zHouse');
});

Route::get('hubungi-kami', 'appController@kontak');

Route::post('send-mail','appController@mail');
