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

    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}
    </div>

@endsection
