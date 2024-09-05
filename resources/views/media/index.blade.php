@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Media Library</h1>

        @foreach($mediaLibraries as $library)
            <div class="media-library my-4">
                <h2>{{ $library['library'] }}</h2>

                <!-- Bootstrap Carousel -->
                <div id="carousel-{{ $loop->index }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        @foreach($library['images'] as $image)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img src="{{ $image }}" class="d-block w-100" alt="{{ $library['library'] }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $loop->index }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $loop->index }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Thumbnails -->
                <div class="thumbnail-container mt-2">
                    @foreach($library['images'] as $image)
                        <img src="{{ $image }}" class="img-thumbnail" alt="{{ $library['library'] }}">
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
@endsection
