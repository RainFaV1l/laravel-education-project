@extends('layouts.index')

@section('page_title', 'Blocked Page')
@section('single', 'single')

@section('content')
    <!-- Main -->
        <div id="main">

            <!-- Post -->
                <article class="post">
                    <h1>You are blocked!</h1>
                    <p>The administrator decided that your account shows suspicious activity.</p>
                </article>

        </div>

    <!-- Footer -->
        <section id="footer">
            <p class="copyright">&copy; Blog. Design: <a href="http://html5up.net">HTML5 UP</a>.</p>
        </section>
@endsection('content')
