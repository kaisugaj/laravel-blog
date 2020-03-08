@extends('layouts.css')

@section('title', 'Kontakt')

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
                    <a class="menu" href="/blog">Blog</a>
                    <a class="menu" href="/contact">Napisz do nas</a>
                </div>
            </nav>
            <div id="wrapper">

                <h1>Kontakt</h1>
                <fieldset style="border-radius: 10px">

                <form method="POST" action="">
                    @method('PATCH')
                    @csrf

                    <div style="margin-top: 10px">
                        <label class="label">Imię</label>

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" size="50">
                        </div>
                    </div>

                    <div style="margin-top: 10px">
                        <label class="label" for="title">Twój adres e-mail</label>

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" size="50">
                        </div>
                    </div>

                    <div style="border-radius: 10px; margin: 10px">
                        <label class="label" for="title">Telefon</label>

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" size="50">
                        </div>
                    </div>

                    <div style="margin-top: 10px">
                        <label class="label" for="description">Wiadomość</label>

                        <div class="form-group">
                            <textarea name="description" class="form-control" size="250"></textarea>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 10px">
                        <button type="submit" class="btn btn-primary">Wyślij</button>
                    </div>
                </form>
                </fieldset>
            </div>
        </div>
    </div>

@endsection

