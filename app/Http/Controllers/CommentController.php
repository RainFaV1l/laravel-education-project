<?php

namespace App\Http\Controllers;

use App\Models\ArticleComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {

//        $request->get('username');

        $validator = Validator::make($request->all(), [
            'article_id' => 'required',
            'text' => 'min:20|max:300|required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $validated = $validator->validated();

        // Auth::user()->id
        $validated['user_id'] = Auth::user()->getAuthIdentifier();

        ArticleComments::query()->create($validated);

        return back();

    }
}
