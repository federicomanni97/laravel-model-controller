@extends('layouts.app');

@section('title', $movie -> title);

@section('content')

<h1>{{$movie -> title}}</h1>
<h2>{{$movie -> original_title}}</h2>

@endsection