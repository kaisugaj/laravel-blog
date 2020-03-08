<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kosmos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,800" rel="stylesheet">

    <!-- Styles -->
@extends('layouts.css')
</head>
<body>
@if(session('flash_message'))
    <div class="alert alert-success alert-dismissible fade in"><strong>Sukces!</strong> {{ session('flash_message') }}</div>
@endif

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
                <a class="menu" href="/blog">Blog</a>
                <a class="menu" href="/contact">Napisz do nas</a>
            </div>
        </nav>
        <div id="wrapper">
            <section>



            </section>
        </div>
    </div>
</div>
</body>
</html>
