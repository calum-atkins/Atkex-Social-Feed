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

Route::get('/profiles', 'App\Http\Controllers\ProfileController@index')->name('profiles.index');
Route::get('/profiles/create', 'App\Http\Controllers\ProfileController@create')->name('profiles.create');
Route::post('/profiles', 'App\Http\Controllers\ProfileController@store')->name('profiles.store');
Route::get('/profiles/{id}', 'App\Http\Controllers\ProfileController@show')->name('profiles.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
