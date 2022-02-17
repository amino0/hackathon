<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

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
    return view('event_fr');
})->name('home');

Route::get('/event/en', function () {
    return view('event');
})->name('event');

Route::get('/event/fr', function () {
    return view('event_fr');
})->name('eventfr');

Route::get('/home', 'App\Http\Controllers\HomeController@home')->middleware(['auth'])->name('adminlist');
//Route::get('/', 'App\Http\Controllers\HomeController@home')->middleware(['auth'])->name('adminlist');
Route::post('/registration', 'App\Http\Controllers\HomeController@register')->name('registration');
Route::get('/registration', 'App\Http\Controllers\HomeController@registrer')->name('registrer');
Route::get('/document/cid', 'App\Http\Controllers\HomeController@cid')->name('cid');
Route::get('/masquer/{id}', 'App\Http\Controllers\HomeController@masquer')->name('masquer');
Route::middleware(['auth:sanctum', 'verified'])->get('/home', 'App\Http\Controllers\HomeController@home')->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/test', function () {
    return view('teste');
});
