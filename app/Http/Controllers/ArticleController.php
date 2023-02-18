<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'anons_title' => 'nullable',
            'content' => 'required|min:10',
            'file' => 'mimes:png,jpeg,jpg',
            'category_id' => 'required',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $image_path = null;

        if($request->file('file')) {
            $image_path = $request->file('file')->store('public/images');
        }

        Article::query()->create([
            'image_path' => $image_path,
            'author_id' => Auth::user()->id,
        ] + $validator->validated());

        return redirect()->route('index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::query()->find($id);

        if ($article === null) {
            return redirect()->route('index.index');
        }

        $article->view_count += 1;
        $article->save();

        return view('single', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'min:6',
            'content' => 'min:20',
            'anons_title' => 'nullable',
            'category_id' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        if($request->file('file')) {

            $request->validate(['file' => 'mimes:jpg,jpeg,png']);

            $path = $request->file('file')->store('public/images');

            $validated['image_path'] = $path;
        }

        $article->update($validated);

        return redirect()->route('single', $article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
//        Article::query()->delete($id);
        return redirect(route('index.index'));
    }

    public function setStatus(Article $article, $status) {
        $article->update(['status' => $status]);
        return redirect()->route('index.index');
    }

    public function setStatusBlocked(Article $article) {
        return $this->setStatus($article, 'blocked');
    }
}
