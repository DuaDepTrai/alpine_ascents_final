@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog List</h1>
        @foreach($blogs as $blog)
            <div class="blog-post">
                <h2>{{ $blog->title }}</h2>
                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" style="max-width: 100%;">
                <p>{!! \Illuminate\Support\Str::limit($blog->content, 150) !!}</p>
                <a href="{{ route('blogs.show', $blog->id) }}">Read more</a>
            </div>
        @endforeach
    </div>
@endsection
