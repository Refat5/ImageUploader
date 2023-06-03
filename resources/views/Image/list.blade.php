@extends('layout.app')
@section('title', 'Image List')
@section('content')
    <div class="text-center mt-5">
        <a href="{{ route('image.create') }}"> <button class="btn btn-info">Add Image</button></a>
        <br>
        <a href="{{ route('logout') }}" class="float-right"><button class="btn btn-seconday"> Logout</button></a>
        <h3 class="text-bold mt-3">Previously Uploaded Image</h3>
        <hr>

        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-3 card shadow p-3  mb-3 bg-white rounded">
                    <img src="{{ asset($image->path) }}" onerror="this.src='{{ asset('error.png') }}'" alt="">
                </div>
            @endforeach

        </div>

    </div>
@endsection
