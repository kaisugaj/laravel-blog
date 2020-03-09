@extends('layouts.app')

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
    <br>

    <h1 class="title">Napisz nowy post!</h1>

    <form action="/projects" method="post">
        @csrf

        <label class="label" for="title">Project Title</label>
        <div class="form-group">
            <input name="title" type="text" class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}"
                   value="{{ old('title') }}"
                   required>
        </div>

        <label class="label" for="description">Project Description</label>
        <div class="form-group">
            <textarea name="description" class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}"
                      required>
                {{ old('description') }}
            </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Dodaj</button>
        </div>

        @include('errors')

    </form>

@endsection
