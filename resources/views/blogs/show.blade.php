@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $blog->title }}</h1>
        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100%;">
        <div>{!! $blog->content !!}</div>
    </div>
@endsection
