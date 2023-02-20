<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
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
    Route::middleware(['auth',])->get('/articles/{article:id}/update', 'update')->name('article.update');

    Route::get('/blocked', 'blocked')->name('index.blocked');
    Route::get('/users/{user:id}', 'user')->name('index.user');
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/signin', 'signin')->name('login');
    Route::post('/signup', 'signup')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

Route::post('/articles/create', [ArticleController::class, 'store'])->name('article.createPost');
Route::post('/articles/{article:id}/update', [ArticleController::class, 'update'])->name('article.updatePost');
Route::get('/articles/{article:id}/delete', [ArticleController::class, 'destroy'])->name('article.delete');
Route::get('/articles/{article:id}/block', [ArticleController::class, 'setStatusBlocked'])->name('article.block');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('single');
Route::post('/comment/create', [CommentController::class, 'store'])->name('comment.create');


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
