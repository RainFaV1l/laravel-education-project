<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        //    $users = User::query()->limit(10)->offset(100)->get();

//        $users = User::query()
//            ->where('role', '=', 'admin')
//            ->orWhere('id', '=', 69)
//            ->limit(10)
//            ->orderByDesc('id')
//            ->get();

        $articles = Article::query()->where('status', '=', 'published')->orderByDesc('created_at')->get();

        //    return view('index', [
        //        'users' => $users,
        //    ]);

        return view('index', compact('articles'));
    }

    public function add() {
        $categories = Category::all();
        return view('add', compact('categories'));
    }

    public function blocked() {
        return view('blocked');
    }

    public function single() {
        return view('single');
    }

    public function user() {
        return view('user');
    }
}
