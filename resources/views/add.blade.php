@extends('layouts.index')

@section('page_title', 'Add Page')
@section('single', 'single')

@section('content')
    <!-- Main -->
        <div id="main">

            <!-- Post -->
                <article class="post">
                    <h1>Add Post</h1>
                    <input type="text" name="name" placeholder="Post name"><br>
                    <input type="text" name="subtitle" placeholder="Subtitle"><br>
                    <input type="text" name="anons" placeholder="Anons"><br>
                    <textarea name="content" placeholder="Post content"></textarea><br>
                    <input type="file" name="file"><br><br>
                    <input type="submit" class="button big fit" value="Add Post">
                </article>

        </div>
    <!-- Footer -->
        <section id="footer">
            <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
        </section>
@endsection
