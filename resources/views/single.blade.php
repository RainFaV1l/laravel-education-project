@extends('layouts.index')

@section('page_title', 'Single Page')
@section('single', 'single')

@section('content')

    <!-- Main -->
        <div id="main">

            <!-- Post -->
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="#">{{ $article['title'] }}</a></h2>
                            <p>{{ $article['anons_title'] }}</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2015-11-01">{{ $article['created_at']->format('d M Y') }}</time>
                            <a href="#" class="author"><span class="name">{{ $article->author()->username }}</span>
                                <img src="{{ $article->author()->image_url }}" alt="Изображение" /></a>
                        </div>
                    </header>
                    <span class="image featured"><img src="{{ $article->image_url }}" alt="img" /></span>
                    <p>{{ $article['content'] }}</p>
                    <footer>
                        <ul class="stats">
                            @auth
                                @if($article->user_has_actions)
                                <li><a href="{{ route('article.update', $article) }}">Edit</a></li>
                                <li><a href="{{ route('article.delete', $article) }}" class="red">Delete</a></li>
                                <li><a href="{{ route('article.block', $article) }}" class="red">Blocked</a></li>
                                @endif
                            @endauth
                            <li><a href="#" class="icon fa-eye">{{ $article->view_count }}</a></li>
                            <li><a href="#">{{ $article->category()->name }}</a></li>
                        </ul>
                    </footer>
                </article>

            <!-- Comments -->
                <div class="post">
                    <section class="comments">
                        <h3>Comments</h3>
                        @auth
                        <form action="{{ route('comment.create') }}" method="POST">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <textarea name="text"></textarea><br>
                            <input type="submit" class="button big fit" value="Add Comment">
                        </form>
                        @endauth
                    </section>
                        @if(count($article->comments()))
                            @foreach($article->comments() as $comment)
                                <article class="comment">
                                    <div class="comment-autor">
                                        <a href="{{ route('index.user', $comment->user_id) }}"><img src="{{ $comment->user()->image_url }}"></a>
                                        <a href="{{ route('index.user', $comment->user_id) }}">{{ $comment->user()->username }}</a>
                                    </div>
                                    <p>{{ $comment['text'] }}</p>
                                </article>
                            @endforeach
                        @else
                            <h3>Комментариев нет.</h3>
                        @endif
                </div>

        </div>

    <!-- Footer -->
        <section id="footer">
            <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
        </section>

@endsection('content')
