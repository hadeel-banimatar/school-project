<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RedirectPageController;



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




//    Home page
Route::get('/', function () { return view('index');})->name('main');


// login and Registration
Route::get('user/create', [ HomeController::class, 'create' ])->name('createUser');
Route::post('user/store', [ HomeController::class, 'store' ]);
Route::get('loginuser/login', [ LoginController::class, 'login' ])->name('login');
Route::post('loginuser/storeLogin', [ LoginController::class, 'storeLogin' ]);
Route::post('/logout','LoginController@logout')->name('logout');
//


// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
//


Route::get('/student', 'RedirectPageController@student')->name('student');
Route::get('/teacher', 'RedirectPageController@teacher')->name('teacher');
Route::get('/class', 'RedirectPageController@class')->name('class');

