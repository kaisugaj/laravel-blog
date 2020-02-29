@extends('layouts.app')

@section('title', 'Twój profil')

@section('content')

    <nav style="text-align: center">
        <ul>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/projects">Podgląd wpisów</a>
            <a style="padding-inline: 5%; text-align: center" class="btn btn-primary" href="/projects/create">Nowy post</a>
        </ul>
    </nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jesteś zalogowany!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
