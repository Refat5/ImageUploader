@extends('layout.app')
@section('title', 'Welcome')
@push('css')
    <style>
        .margin-10 {
            margin-top: 20%;
        }
    </style>
@endpush
@section('content')


    <div class="row mt-5 justify-content-center">
        <div class="card ">
            <div class="card-header text-center">
                <h2>
                    This is Image Upload application
                </h2>
                <p>
                    Heare You can upload image using just image url
                </p>
            </div>
            <div class="card-body">

                <div class="text-center">
                    <a href="{{ route('login') }}"><button class="btn btn-primary">Login</button></a>
                    <a href="{{ route('register') }}"><button class="btn btn-primary">Register</button></a>

                </div>

            </div>



        </div>
    </div>
@endsection

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/js/app.js'])
</head>

<body class="antialiased">
    <div id="app"></div>
</body>

</html> --}}
