<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Alpine Ascents Vietnam')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    @stack('styles')  <!-- Đẩy các style từ các file con vào đây -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 5%;
            height: 100%;
            color: black;
        }
        
        .carousel-control-prev {
            left: -5%; /* Adjust the left button outside the frame */
        }

        .carousel-control-next {
            right: -5%; /* Adjust the right button outside the frame */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black; /* Change the background color of the navigation button icons to black */
        }

        /* Set image size */
        .carousel-item img {
            width: 100%;
            height: 750px; /* Set a specific height */
            object-fit: cover; /* Ensure the image fits in the frame without distortion */
        }

        .carousel {
            margin-top: 20px;
        }

        .carousel-item {
            position: relative;
        }

        .media-library img.img-thumbnail {
            cursor: pointer;
            width: 100px; /* Set fixed width */
            height: auto; /* Auto height to maintain aspect ratio */
            max-height: 100px; /* Set maximum height */
            object-fit: cover; /* Ensure the image is not distorted */
            opacity: 0.5; /* Set default opacity */
            transition: opacity 0.3s; /* Add a transition effect when changing opacity */
        }

        .media-library img.img-thumbnail.active {
            opacity: 1;
        }

        .thumbnail-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Spacing between thumbnail images */
        }

        .thumbnail-container img.img-thumbnail {
            width: 100px; /* Set fixed width */
            height: auto; /* Auto height to maintain aspect ratio */
            max-height: 100px; /* Set maximum height */
            object-fit: cover; /* Ensure the image is not distorted */
            opacity: 0.5; /* Set default opacity */
            transition: opacity 0.3s; /* Add a transition effect when changing opacity */
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousels = document.querySelectorAll('.carousel');
        carousels.forEach(carousel => {
            const carouselInner = carousel.querySelector('.carousel-inner');
            const thumbnails = carousel.nextElementSibling.querySelectorAll('.img-thumbnail');

            carousel.addEventListener('slid.bs.carousel', function () {
                const activeIndex = Array.from(carouselInner.children).findIndex(item => item.classList.contains('active'));
                
                // Stop video on the current slide
                const iframes = carouselInner.querySelectorAll('iframe');
                iframes.forEach(iframe => {
                    const src = iframe.getAttribute('src');
                    iframe.setAttribute('src', '');
                    iframe.setAttribute('src', src);
                });

                // Update the opacity of the thumbnail
                thumbnails.forEach((thumbnail, index) => {
                    thumbnail.style.opacity = (index === activeIndex) ? '1' : '0.5';
                });
            });

            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    const slideTo = this.getAttribute('data-slide-to');
                    const target = this.getAttribute('data-target');
                    const carouselInstance = new bootstrap.Carousel(document.querySelector(target));
                    carouselInstance.to(parseInt(slideTo));
                });
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @stack('scripts')  <!-- Push scripts from child files here -->
