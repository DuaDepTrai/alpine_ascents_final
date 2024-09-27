<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Alpine Ascents Vietnam')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
   
    @stack('styles')  <!-- Đẩy các style từ các file con vào đây -->
    <style>
        .header-image {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    height: 600px; /* Đặt chiều cao nếu cần */
    max-width: 70%;
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
            padding: 20px;
            width: 100vw;
            max-width: 100%;
            background-image: url('{{ asset('images/home/home_background.jpg') }}');
            background-size: cover;
            background-position: center;
            background-color: rgba(255, 255, 255, 0.7); /* Màu đen mờ */
            background-blend-mode: overlay;
        }

        .header_custom_container{
            display: flex;
            max-width: 100%;
            height: 125px;
            background-image: url('{{ asset('images/home/header_background2.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
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
    <style>
        #colophon {
            background-color: #4b764d; /* Mã màu xanh lá cây */
            color: white; /* Đổi màu chữ nếu cần */
            padding: 20px 0; /* Thêm khoảng cách trên và dưới */
        }

        .site-footer {
            background-color: #1ab641;
            padding: 20px 0;
        }

        .container_footer {
            display: flex;
            justify-content: flex-start; /* Căn trái các phần tử */
            flex-wrap: wrap;
        }

        .footer-left {
            flex: 1;
            margin-left: 20%;
            padding: 10px;
            max-width: 50%;
            text-align: left;
        }

        .footer-right {
            flex: 1;
            padding: 10px;
            max-width: 50%;
            text-align: center;
            margin-right: 15%;
        }

        .footer-right img {
            max-width: 100%;
            height: auto;
            width: 350px; /* Đặt chiều rộng cố định */
            height: 150px; /* Đặt chiều cao cố định */
        }

        h3 {
            margin-top: 0;
        }

        .footer-left a {
            color: white; /* Đổi màu chữ của số điện thoại và email sang trắng */
            text-decoration: none; /* Loại bỏ gạch chân nếu cần */
        }

        .footer-left a:hover {
            color: #ffe100; /* Màu sắc khi hover (tùy chỉnh theo ý muốn) */
        }
    </style>
</head>

<body>    
    <header>
        <div class="preheader bg-dark text-white d-flex justify-content-between align-items-center p-3">
            <a href="/order" class="ms-5" style="color: #d6d6d6">BOOK YOUR NEXT TRIP</a>
            <div style="padding-right: 40px;">
                <?php 
                    if(Auth::check()){
                        $id = Auth::user()->id;
                        echo '<a class="text-white me-5" href="/users/'.$id.'">YOUR ACCOUNT</a>';
                    }  
                    else{
                        echo '<a class="text-white me-5" href="/login">LOGIN</a>';
                        echo '<a class="text-white me-5" href="/register">REGISTER</a>';
                    }
                ?>
            </div>
        </div>
        <div class="header_custom_container">
            <div>
                <a href="{{ route('home') }}">
                    <img class="logo" src="{{ asset('images/logovn.png') }}" alt="">
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
                <form action="/order">
                    <button class="normal_buttons">BOOK A TRIP</button>                    
                </form>
                
            </div>
        </div>
</header>

    <div class="container">
        @yield('content')
    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container_footer">
            <div class="footer-left">
                <h3>Alpine Ascents Vietnam</h3>
                <p>10th Floor, Green Peak Building,<br> 123 Tran Duy Hung Street,<br> Cau Giay District, Hanoi, Vietnam.</p>
                <p>Contact: +84 24 1234 5678</p>
                <p>Email: contact@alpineascentsvn.com</p>
            </div>
            <div class="footer-right">
                <h3>Find Us Here</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6646413870612!2d105.79135817535462!3d21.00607598063757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca5f64f829f%3A0xcb4a80cd1b0490dc!2zMTIzIMSQLiBUcuG6p24gRHV5IEjGsG5nLCBUcnVuZyBIb8OgLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1727066046050!5m2!1sen!2s" width="350" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div><!-- .container -->
    </footer><!-- #colophon -->
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
