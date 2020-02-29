@extends('layouts.css')

@section('title', 'Blog')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Kosmos
            </div>

            <nav>
                <div class="links">
                    <a class="menu" href="/">Strona główna</a>
                    <a class="menu" href="index.php">Nowości</a>
                    <a class="menu" href="index.php">Nasze produkty</a>
                    <a class="menu" href="/blog">Blog</a>
                    <a class="menu" href="index.php">Kontakt</a>
                </div>
            </nav>
            <div id="wrapper">

                <article>
                    <h1>Najnowsze wpisy</h1>
                    <p></p>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            @foreach ($projects as $project)
                                <thead>
                                <tr>

                                    <td>
                                        <a href="/blog/{{ $project->id }}">
                                            {{ $project->title }}
                                        </a>
                                    </td>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        {{ $project->description }}
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>

                </article>

                <footer>

                </footer>
            </div>
        </div>
    </div>

@endsection
