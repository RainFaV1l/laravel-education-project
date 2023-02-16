<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        //    $users = User::query()->limit(10)->offset(100)->get();

        $users = User::query()
            ->where('role', '=', 'admin')
            ->orWhere('id', '=', 69)
            ->limit(10)
            ->orderByDesc('id')
            ->get();

        //    return view('index', [
        //        'users' => $users,
        //    ]);

        return view('index', compact('users'));
    }

    public function add() {
        return view('add');
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
