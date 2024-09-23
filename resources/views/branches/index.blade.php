@extends('layouts.app')

@section('content')
    <div class="body">
        <h1>Alpine Ascents Branches Worldwide</h1>
        <div>
            Branches of the Alpine Ascents system are service and customer support centers located in various regions around the world. Each branch serves as a coordination hub for exploration tours, providing detailed information about the journeys, and assisting customers throughout the process, from registration to participation in the tour. With branches strategically located, customers can easily reach out for support, learn about prominent travel destinations, and ensure they have the best experience when joining Alpine Ascents’ tour programs.
        </div>
        <div class="container">
            @foreach($branches as $branch)
                <div class="branch">
                    <h2>{{ $branch->name }}</h2>
                    <p>{{ $branch->address }}</p>
                    <p>Phone: {{ $branch->phone }}</p>
                    <div id="map-{{ $branch->id }}" class="map"></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style> 
        .body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            background-color: #f4f4f4;
            width: 80%;
        }
        .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .branch {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            width: 45%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .map {
            width: 100%;
            height: 200px;
            margin-top: 10px;
        }
        h2 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        function initMap(lat, lng, elementId) {
            var map = L.map(elementId).setView([lat, lng], 10);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([lat, lng]).addTo(map)
                .bindPopup('Marker at this location')
                .openPopup();
        }

        document.addEventListener("DOMContentLoaded", function() {
            const branches = @json($branches);
            branches.forEach(branch => {
                const [lat, lng] = branch.positioning.split(',').map(coord => parseFloat(coord));
                initMap(lat, lng, `map-${branch.id}`);
            });
        });
    </script>
@endpush