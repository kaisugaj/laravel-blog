@extends('layouts.app')

@section('title', 'Podgląd wpisów')

@section('content')

    <nav style="text-align: center">
        <ul>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/projects">Podgląd
                wpisów</a>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/projects/create">Nowy
                post</a>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/users">Twoje dane</a>

        </ul>
    </nav>
    </br>

    <h1 class="title">Twoje dane</h1>
    @foreach($users as $user)
    @endforeach
    <form>
        @method('PATCH')
        @csrf

        <div>
            <label class="label" for="title">Name</label>

            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Name" value="{{ $user->name }}" disabled>
            </div>
        </div>

        <div>
            <label class="label" for="title">E - mail</label>

            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="E - mail" value="{{ $user->email }}" disabled>
            </div>
        </div>
    </form>
    <form method="POST" action="/users/{{ $user->id }}">

        <a href="/users/{{ $user->id }}/edit" class="btn btn-primary"
           style="margin-right: 2px;">Zmień hasło</a>

        <div>
            <form method="POST" action="/users/">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Usuń konto</button>
            </form>
        </div>
    </form>
@endsection
