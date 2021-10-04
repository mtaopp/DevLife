<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;


Route::get('/', function() {
    return view('home');
})
    ->middleware('guest')
    ->name('home');


Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');




Route::get('/profile', [UserController::class, 'show'])
    ->middleware('auth')
    ->name('profile');

Route::get('/profileEdit', [UserController::class, 'edit'])
    ->middleware('auth')
    ->name('profileEdit');

Route::post('/profileUpdate', [UserController::class, 'update'])
    ->middleware('auth')
    ->name('profileUpdate');



Route::get('/createArticle', [ArticleController::class, 'createArticle'])
    ->middleware('auth')
    ->name('createArticle');

Route::post('/storeArticle', [ArticleController::class, 'storeArticle'])
    ->middleware('auth')
    ->name('storeArticle');


Route::get('/createCategory', [ArticleController::class, 'createCategory'])
    ->middleware('auth')
    ->name('createCategory');

Route::post('/storeCategory', [ArticleController::class, 'storeCategory'])
    ->middleware('auth')
    ->name('storeCategory');


Route::get('/changePassword', [UserController::class, 'changePassword'])
    ->middleware('auth')
    ->name('changePassword');


Route::post('/storePassword', [UserController::class, 'storePassword'])
    ->middleware('auth')
    ->name('storePassword');

Route::post('/changeImage', [UserController::class, 'changeImage'])
    ->middleware('auth')
    ->name('changeImage');




Route::get('/articles', [ArticleController::class, 'showAllArticles'])
    ->name('articles');

Route::get('/article/{id}', 'ArticleController@view');





Route::get('/categories', [ArticleController::class, 'showCategories'])
    ->name('categories');

// Route::get('/newsletter', function() {
//     return view('newsletter');
// })->name('newsletter');






Route::get('/control-panel', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('control-panel');
