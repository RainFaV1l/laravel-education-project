<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Models\User;
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

//Route::get('/', [IndexController::class, 'index']);

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('index.index');
    Route::get('/add', 'add')->name('index.add');
    Route::get('/blocked', 'blocked')->name('index.blocked');
    Route::get('/single', 'single')->name('index.single');
    Route::get('/user', 'user')->name('index.user');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/signin', 'signin')->name('login');
    Route::post('/signup', 'signup')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

//Route::get('/users', function () {
//    return 'Пользователи';
//});
//
//Route::get('/users/{id}', function ($id) {
//    return 'Привет пользователь с id: ' . $id;
//});
//
//Route::get('/books', function () {
//    return 'Книги';
//});
//
//Route::get('books/{id}', function ($id) {
//    return 'Книга с id: ' . $id;
//})->where(['id' => '[0-9]+']);
//
