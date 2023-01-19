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

Route::prefix('posts')->name('posts.')->group(function() {
    Route::get('/', 'PostsController@index');
    Route::get('/{post:slug}', 'PostsController@show');
});

Route::prefix('dashboard')->group(function(){
    Route::get('/', function(){
        return view('posts::dashboard');
    });
});
