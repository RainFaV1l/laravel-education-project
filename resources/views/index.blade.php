@extends('layouts.index')

@section('page_title', 'Home Page')

@section('content')
    <!-- Main -->
    <div id="main">

        @foreach($articles as $article)
            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="#">{{ $article['title'] }}</a></h2>
                        <p>{{ $article['anons_title'] }}</p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">{{ $article['created_at']->format('d M Y') }}</time>
                        <a href="{{ route('index.user', $article->author_id) }}" class="author"><span class="name">{{ $article->author()->name }}</span><img src="{{ $article->author()->image_url }}" alt="image" /></a>
                    </div>
                </header>
                <a href="#" class="image featured"><img src="{{ $article->image_url }}" alt="img" /></a>
                <p>{{ substr($article['content'], 0, 120) }}</p>
                <footer>
                    <ul class="actions">
                        <li><a href="{{ route('single', $article) }}" class="button big">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <li><a href="#" class="icon fa-eye">{{ $article['view_count'] }}</a></li>
                        <li><a href="#" class="icon fa-comment">128</a></li>
                        <li><a href="#" class="icon">{{ $article->category()->name }}</a></li>
                    </ul>
                </footer>
            </article>
        @endforeach

        {{ $articles->links('vendor.pagination.default') }}

{{--        @include('vendor.pagination.bootstrap-5');--}}

        <!-- Pagination -->
{{--        <ul class="actions pagination">--}}
{{--            <li><a href="" class="disabled button big previous">Previous Page</a></li>--}}
{{--            <li><a href="#" class="button big next">Next Page</a></li>--}}
{{--        </ul>--}}

    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
            <header>
                <h2>Blog</h2>
                <p>Be popular with us</p>
            </header>
        </section>

        <!-- Mini Posts -->
        <section>
            <h3>Popular posts</h3>
            <div class="mini-posts">

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                        <time class="published" datetime="2015-10-20">1 Ноября 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Rutrum neque accumsan</a></h3>
                        <time class="published" datetime="2015-10-19">1 Ноября 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Odio congue mattis</a></h3>
                        <time class="published" datetime="2015-10-18">1 Ноября 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Enim nisl veroeros</a></h3>
                        <time class="published" datetime="2015-10-17">1 Ноября 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                </article>

            </div>
        </section>

        <!-- Posts List -->
        <section>

            <h3>Rating bloggers</h3>

            <ul class="posts">
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
                            <span class="published">30 likes in 10 posts</span>
                        </header>
                        <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
                            <span class="published">30 likes in 10 posts</span>
                        </header>
                        <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Euismod amet placerat vivamus porttitor</a></h3>
                            <span class="published">20 likes in 5 posts</span>
                        </header>
                        <a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
                            <span class="published">10 likes in 15 posts</span>
                        </header>
                        <a href="#" class="image"><img src="images/pic11.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
                            <span class="published">1 likes in 1 post</span>
                        </header>
                        <a href="#" class="image"><img src="images/pic12.jpg" alt="" /></a>
                    </article>
                </li>
            </ul>
        </section>

        <!-- Footer -->
        <section id="footer">
            <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
        </section>

    </section>
@endsection
