<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Middleware\AdminMiddleware;
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
//    Route::middleware(['auth', AdminMiddleware::class])->get('/add', 'add')->name('index.add');
    Route::middleware(['auth',])->get('/articles/create', 'add')->name('article.add');

    Route::get('/blocked', 'blocked')->name('index.blocked');
    Route::get('/single', 'single')->name('index.single');
    Route::get('/user', 'user')->name('index.user');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/signin', 'signin')->name('login');
    Route::post('/signup', 'signup')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('single');
Route::post('articles/create', [ArticleController::class, 'store'])->name('article.createPost');

//Route::middleware(['auth', AdminMiddleware::class])
//    ->controller(AdminController::class)
//    ->prefix('/admin')
//    ->group(function () {
//    Route::get('/create', 'createArticle')->name('admin.create');
//});

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
