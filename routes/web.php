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

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';



// Route::get('/home', function() {
//     return view('home');
// });



/*

Route::get('/article', function() {
    return view('post');
});
Route::get('/home', function() {
    return view('mainBlog');
});

Route::get('/profile', 'UserController@index')->middleware(['auth'])->name('dashboard');

Route::get('/editProfile', 'UserController@edit')->middleware(['auth'])->name('dashboard');

Route::post('/storeProfile', 'UserController@store')->middleware(['auth'])->name('dashboard');
*/
