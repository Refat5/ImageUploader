@extends('layout.app')
@section('title', 'Add Image')
@push('css')
    <style>
        .preview_image {
            text-align: center;
        }

        .preview_image img {
            border-radius: 10px;
            padding-bottom: 32px;

        }

        .bg-green {
            background: #0e780e;
            color: white;
            padding: 6px;
            border-radius: 5px;

        }
    </style>
@endpush
@section('content')
    <div id="app">

    </div>
    @vite('resources/js/app.js')
@endsection
