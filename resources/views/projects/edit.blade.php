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
    </br>

    <h1 class="title">Edytuj post!</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf

        <div>
            <label class="label" for="title">Title</label>

            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $project->title }}">

            </div>
        </div>

        <div>
            <label class="label" for="description">Description</label>

            <div class="form-group">
                <textarea name="description" class="form-control">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Edytuj post</button>
        </div>
    </form>

@endsection
