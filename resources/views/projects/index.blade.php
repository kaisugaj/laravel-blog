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
    @if(session('flash_message'))
        <div class="alert alert-success alert-dismissible fade in">
            <strong>Success!</strong> {{ session('flash_message') }}
        </div>
    @endif

    <h1>Lista Twoich postów</h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Lista</th>
                <th>Data dodania</th>
                <th>Działanie</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td><a href="/projects/{{ $project->id }}">
                            {{ $project->title }}
                        </a>
                    </td>

                    <td>{{ $project->created_at }}</td>
                    <td>

                        <a href="/projects/{{ $project->id }}/edit" class="btn btn-info pull-left"
                           style="margin-right: 2px;">Edit </a>

                        <form method="POST" action="/projects/{{ $project->id }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Usuń post</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
