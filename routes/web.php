<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentsController;


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

Route::get('/welcome', function () {
    return view("welcome");
});

// Route::get('/home', function () {
//     return "This is the home page";
// });

// Route::get('/home/{name?}', function ($name = 'No Name') {
//     return "This is $name's home page";
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create')->middleware(['auth']);
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit')->middleware(['auth']);
Route::put('/posts/{id}', 'App\Http\Controllers\PostController@update')->name('posts.update');

// Route::get('/getComments/{post}', 'App\Http\Controllers\CommentsController@getComments');

Route::get('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

// Route::post('comments/{post_id}', 'App\Http\Controllers\CommentController@store')->name('comments.store');

require __DIR__.'/auth.php';
