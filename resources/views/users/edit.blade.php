@extends('layouts.app')

@section('content')

    <nav style="text-align: center">
        <ul>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/projects">Podgląd wpisów</a>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/projects/create">Nowy post</a>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/users">Twoje dane</a>
        </ul>
    </nav>
    </br>

    <h1 class="title">Nowe hasło</h1>

    <form method="POST" action="/users/{{ $user->id }}">
        @method('PATCH')
        @csrf

        <div>
            <label class="label" for="title">Password</label>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>

        <div>
            <label class="label" for="title">Repeat password</label>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Repeat password">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Zmień hasło</button>
        </div>
    </form>

@endsection
