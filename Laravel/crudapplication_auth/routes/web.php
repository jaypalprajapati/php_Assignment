<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('forget-password', [CustomAuthController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [CustomAuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [CustomAuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [CustomAuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');

/*Route::get('blogs', '\App\Http\Controllers\PostController@index')->name('index');
Route::get('blogs/create', '\App\Http\Controllers\PostController@create')->name('create');
Route::get('blogs/{blog}/edit', '\App\Http\Controllers\PostController@edit')->name('edit');

/*Route::get('blogs', '[BlogController::class, 'index']');

Route::get('blogs/create', '[BlogController::class, 'create']');

Route::post('blogs', '[BlogController::class, 'store']');

Route::get('blogs/{blog}/edit', '[BlogController::class, 'edit']');

Route::put('blogs/{blog}', '[BlogController::class, 'update']');

Route::get('blogs/{blog}', '[BlogController::class, 'show']');

Route::delete('blogs/{blog}', '[BlogController::class, 'destroy']');*/
