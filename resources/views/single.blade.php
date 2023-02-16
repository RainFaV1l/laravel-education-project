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
                            <h2><a href="#">Magna sed adipiscing</a></h2>
                            <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="2015-11-01">1 ноября 2015</time>
                            <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                        </div>
                    </header>
                    <span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <p>Nunc quis dui scelerisque, scelerisque urna ut, dapibus orci. Sed vitae condimentum lectus, ut imperdiet quam. Maecenas in justo ut nulla aliquam sodales vel at ligula. Sed blandit diam odio, sed fringilla lectus molestie sit amet. Praesent eu tortor viverra lorem mattis pulvinar feugiat in turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce ullamcorper tellus sit amet mattis dignissim. Phasellus ut metus ligula. Curabitur nec leo turpis. Ut gravida purus quis erat pretium, sed pellentesque massa elementum. Fusce vestibulum porta augue, at mattis justo. Integer sed sapien fringilla, dapibus risus id, faucibus ante. Pellentesque mattis nunc sit amet tortor pellentesque, non placerat neque viverra. </p>
                    <footer>
                        <ul class="stats">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#" class="red">Delete</a></li>
                            <li><a href="#" class="red">Blocked</a></li>
                            <li><a href="#" class="icon fa-heart">28</a></li>
                            <li><a href="#" class="icon fa-comment">128</a></li>
                        </ul>
                    </footer>
                </article>

            <!-- Comments -->
                <div class="post">
                    <section class="comments">
                        <h3>Comments</h3>
                        <form>
                            <textarea></textarea><br>
                            <input type="submit" class="button big fit" value="Add Comment">
                        </form>
                    </section>
                    <article class="comment">
                        <div class="comment-autor">
                            <a href="#"><img src="images/avatar.jpg"></a>
                            <a href="#">User</a>
                        </div>
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.</p>
                    </article>
                    <article class="comment">
                        <div class="comment-autor">
                            <a href="#"><img src="images/avatar.jpg"></a>
                            <a href="#">User</a>
                        </div>
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.</p>
                    </article>
                    <article class="comment">
                        <div class="comment-autor">
                            <a href="#"><img src="images/avatar.jpg"></a>
                            <a href="#">User</a>
                        </div>
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat.</p>
                    </article>
                </div>

        </div>

    <!-- Footer -->
        <section id="footer">
            <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
        </section>

@endsection('content')
