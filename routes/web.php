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
    return 'Привет мир!';
});

Route::get('/users', function () {
    return 'Пользователи';
});

Route::get('/users/{id}', function ($id) {
    return 'Привет пользователь с id: ' . $id;
});

Route::get('/books', function () {
    return 'Книги';
});

Route::get('books/{id}', function ($id) {
    return 'Книга с id: ' . $id;
})->where(['id' => '[0-9]+']);
