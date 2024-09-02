<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine Ascents Branches</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
</head>
<body>
    <h1>Alpine Ascents Branches Worldwide</h1>
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
</body>
</html>
