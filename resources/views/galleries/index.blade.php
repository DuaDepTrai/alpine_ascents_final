@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($galleries as $tour)
            <div class="media-library my-4">
                <!-- Tour Name -->
                <h2 class="text-center" style="font-size: 60px;">{{ $tour->name }}</h2>

                <!-- Bootstrap Carousel for Images and Videos -->
                @if($tour->galleries->count())
                    @foreach($tour->galleries as $media)
                        @php
                            $images = json_decode($media->images, true);
                            $videos = json_decode($media->videos, true);
                        @endphp
                        @if(!empty($images) || !empty($videos))
                            <div id="carousel-{{ $loop->parent->index }}-{{ $loop->index }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-inner">
                                    <!-- Video -->
                                    @if(!empty($videos))
                                        @foreach($videos as $video)
                                            @php
                                                $videoId = explode('v=', $video)[1];
                                                $embedUrl = 'https://www.youtube.com/embed/' . $videoId;
                                                $thumbnailUrl = 'https://img.youtube.com/vi/' . $videoId . '/mqdefault.jpg';
                                            @endphp
                                            <div class="carousel-item @if($loop->first) active @endif">
                                                <iframe width="100%" height="750" src="{{ $embedUrl }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        @endforeach
                                    @endif

                                    <!-- Images -->
                                    @if(!empty($images))
                                        @foreach($images as $image)
                                            <div class="carousel-item @if($loop->first && empty($videos)) active @endif">
                                                <img src="{{ asset($image) }}" class="d-block w-100" alt="{{ $tour->name }}">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $loop->parent->index }}-{{ $loop->index }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $loop->parent->index }}-{{ $loop->index }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <!-- Thumbnails -->
                            <div class="thumbnail-container mt-2">
                                @if(!empty($videos))
                                    @foreach($videos as $index => $video)
                                        @php
                                            $videoId = explode('v=', $video)[1];
                                            $thumbnailUrl = 'https://img.youtube.com/vi/' . $videoId . '/mqdefault.jpg';
                                        @endphp
                                        <div class="thumbnail-item">
                                            <img src="{{ $thumbnailUrl }}" class="img-thumbnail" alt="{{ $tour->name }}" data-slide-to="{{ $index }}" data-target="#carousel-{{ $loop->parent->index }}-{{ $loop->index }}">
                                        </div>
                                    @endforeach
                                @endif

                                @if(!empty($images))
                                    @foreach($images as $index => $image)
                                        <img src="{{ asset($image) }}" class="img-thumbnail" alt="{{ $tour->name }}" data-slide-to="{{ $index + (count($videos) ?? 0) }}" data-target="#carousel-{{ $loop->parent->index }}-{{ $loop->index }}">
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    @endforeach
                @endif

                <!-- Separator -->
                <div class="separator my-4">
                    <hr>
                    <p class="text-center">✦✦✦</p> <!-- You can use other special characters or symbols here -->
                </div>
            </div>
        @endforeach

    </div>
@endsection
