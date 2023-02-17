@extends('layouts.index')

@section('page_title', 'Add Page')
@section('single', 'single')

@section('content')
    <!-- Main -->
        <div id="main">
{{--            @if($errors->any())--}}
{{--                <li class="errors">--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <p>--}}
{{--                            {{ $error }}--}}
{{--                        </p>--}}
{{--                    @endforeach--}}
{{--                </li>--}}
{{--            @endif--}}
            <!-- Post -->
                <form method="post" enctype="multipart/form-data" class="post" action="{{ route('article.createPost') }}">
                    @csrf
                    <h1>Add Post</h1>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="title" placeholder="Title"><br>
                    <input type="text" name="anons_title" placeholder="Anons Title"><br>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea name="content" placeholder="Post content"></textarea><br>
                    @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="file" name="file"><br><br>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="submit" class="button big fit" value="Add Post">
                </form>

        </div>
    <!-- Footer -->
        <section id="footer">
            <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
        </section>
@endsection
