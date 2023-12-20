@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<div class="row g-3">
    @foreach($movies as $movie)
    <div class="col-12 col-md-6 col-lg-4">
        <div class="p-3">
            <img src="{{$movie -> image}}" alt="">
            <span class="fs-2"><a href="{{route('movies.show', $movie->id)}}">{{$movie -> title}}</a></span>
        </div>
    </div>
    @endforeach
</div>
@endsection