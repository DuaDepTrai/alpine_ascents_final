<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Alpine Ascents Vietnam')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

   
    @stack('styles')  <!-- Đẩy các style từ các file con vào đây -->
    <style>
        .header-image {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    height: 400px; /* Đặt chiều cao nếu cần */
    max-width: 90%;
    height: 500;
    margin: 0 auto;
}
    </style>
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
            left: -5%; /* Điều chỉnh nút trái ra ngoài khung */
        }

        .carousel-control-next {
            right: -5%; /* Điều chỉnh nút phải ra ngoài khung */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black; /* Đổi màu nền của icon nút điều hướng thành màu đen */
        }

        /* Đặt kích thước ảnh */
        .carousel-item img {
            width: 100%;
            height: 750px; /* Đặt chiều cao cụ thể */
            object-fit: cover; /* Đảm bảo ảnh vừa vặn trong khung mà không bị méo */
        }

        .carousel {
            margin-top: 20px;
        }

        .carousel-item {
            position: relative;
        }

        .media-library img.img-thumbnail {
            cursor: pointer;
            width: 100px; /* Đặt chiều rộng cố định */
            height: auto; /* Chiều cao tự động để giữ tỷ lệ */
            max-height: 100px; /* Đặt chiều cao tối đa */
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
            opacity: 0.5; /* Đặt độ trong suốt mặc định */
            transition: opacity 0.3s; /* Thêm hiệu ứng chuyển tiếp khi thay đổi độ trong suốt */
        }

        .media-library img.img-thumbnail.active {
            opacity: 1;
        }

        .thumbnail-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Khoảng cách giữa các ảnh thumbnail */
        }

        .thumbnail-container img.img-thumbnail {
            width: 100px; /* Đặt chiều rộng cố định */
            height: auto; /* Chiều cao tự động để giữ tỷ lệ */
            max-height: 100px; /* Đặt chiều cao tối đa */
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
            opacity: 0.5; /* Đặt độ trong suốt mặc định */
            transition: opacity 0.3s; /* Thêm hiệu ứng chuyển tiếp khi thay đổi độ trong suốt */
        }
        .container{
            width: 100%;
            max-width: 100%; 
            background-image: url('images/home_background.jpg');
            background-size: cover;
            background-position: center;
            background-color: rgba(255, 255, 255, 0.7); /* Màu đen mờ */
            background-blend-mode: overlay;
        }
        .header_custom_container{
            display: flex;
            max-width: 100%;
            height: 125px;
            background-image: url('images/home/header_background2.png');
        }
        .preheader{
            height: 30px;
        }
        .logo{
            margin-left: 14vw;
            margin-top: 17px;
        }
        .buttons{
            display: flex;
            margin-left: 4vw;
            margin-top: 35px;
        }
        .normal_buttons{
            box-sizing: border-box;
            padding: 10px;
            font-weight: bold;
            color: #5c715e;
            height: 40px;
            white-space: nowrap;
            margin-left: 15px;
            background-color: #ddeedf;
            border: 1px solid #d6d6d6;
            box-shadow:
            0 4px 8px rgba(0, 0, 0, 0.2),
            inset 0 1px 0 rgba(255, 255, 255, 0.3),
            inset 0 -1px 0 rgba(0, 0, 0, 0.2);
        }   
    
    @media(max-width: 1100px){
        .header_custom_container{
            height: 170px;
            display: block;
        }
    }
    </style>
</head>

<body>    
    <header>
        <div class="preheader bg-dark text-white">
            <p class="ms-5">BOOK YOUR NEXT TRIP | 098 227 1157</p>
        </div>
        <div class="header_custom_container">
            <div>
                <a href="{{ route('home') }}">
                    <img class="logo" src="images/logovn.png" alt="">
                </a>
            </div>
            <div class="buttons">
                <form action="{{ route('tours') }}">
                    <button class="normal_buttons">TOURS</button>
                </form>
                <form action="{{ route('galleries.index') }}">
                    <button class="normal_buttons">GALLERY</button>
                </form>
                <form action="{{ route('branches') }}">
                    <button class="normal_buttons">BRANCHES</button>
                </form>
                <form action="{{ route('information') }}">
                    <button class="normal_buttons">INFORMATION</button>
                </form>
                <form action="{{ route('aboutus') }}">
                    <button class="normal_buttons">ABOUT US</button>
                </form>
                <button class="normal_buttons">BOOK A TRIP</button>                
            </div>
        </div>
</header>

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
                
                // Dừng video trên slide hiện tại
                const iframes = carouselInner.querySelectorAll('iframe');
                iframes.forEach(iframe => {
                    const src = iframe.getAttribute('src');
                    iframe.setAttribute('src', '');
                    iframe.setAttribute('src', src);
                });

                // Cập nhật độ trong suốt của thumbnail
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
@stack('scripts')  <!-- Đẩy các script từ các file con vào đây -->
