<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return view("welcome");
});

Route::get('/home', function () {
    return "This is the home page";
});

Route::get('/home/{name?}', function ($name = 'No Name') {
    return "This is $name's home page";
});

// Route::get('/profiles/{profile?}', function($profile = null) {
//     return view('profile', ['profile'=>$profile]);
// });

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
