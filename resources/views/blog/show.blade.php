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
                    <a class="menu" href="/contact">Kontakt</a>
                </div>
            </nav>
            <div id="wrapper">

                <h1>Najnowsze wpisy</h1>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <td>
                                {{ $project->title }}
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
                    </table>
                </div>
            </div>

            <fieldset style="border-radius: 10px">
                <legend>Komentarze</legend>
                @foreach($project->comment as $comm)

                   <div><h1> {{ $comm->name }} </h1><h7>{{ $comm->created_at }}</h7></div>
                    <h7> {{ $comm->description }} </h7>

                @endforeach
            </fieldset>
            <fieldset style="border-radius: 10px; margin-top: 20px">
                <legend>Dodaj komentarz</legend>
                <form class="" action="/blog/{{ $project->id }}/comment" method="post">
                    @csrf

                    <div class="form-group">
            <textarea name="description" placeholder="Opinia" class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}" required></textarea>
                    </div>
                    </br>
                    <div class="form-group">
                        <input name="name" type="text" placeholder="Pseudonim" class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}" required>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Dodaj</button>
                        </div>

                    @include('errors')

                </form>
            </fieldset>
        </div>
    </div>

@endsection
