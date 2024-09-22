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
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('images/home/bg2.jpg'); /* Đường dẫn đến hình ảnh */
            background-size: cover; /* Để hình ảnh phủ kín toàn bộ màn hình */
            position: relative; /* Để sử dụng vị trí tương đối */
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 0.4); /* Độ mờ 50% */
            z-index: -1; /* Đặt lớp nền này ở dưới cùng */
        }

        /* Phần header */
        .site-header {
            background-color: white;
            border-bottom: 3px solid #157100; /* Đường kẻ xanh ở phía dưới */
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .nav-bg {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
        }

        .site-logo img {
            height: 60px; /* Kích thước logo */
        }

        .ubermenu-nav {
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .ubermenu-nav li {
            margin-left: 30px;
            display: flex;
            align-items: center; /* Căn giữa text theo chiều dọc */
        }

        .ubermenu-target {
            padding: 5px 5px;
            color: black;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            display: flex;
            align-items: center; /* Căn giữa text theo chiều dọc */
            height: 100%; /* Bảo đảm chiếm toàn bộ chiều cao menu item */
        }

        .ubermenu-target:hover {
            color: #FF2400; /* Màu khi hover */
        }

        .ubermenu-nav li:hover .ubermenu-target {
            background-color: #FF2400; /* Đổi màu nền khi hover */
            color: white; /* Đổi màu text thành trắng */
            text-decoration: none; /* Bỏ gạch chân text */
        }

        /* Phần menu "Book a Trip" */
        .ubermenu-target.book-trip {
            background-color: #FF2400;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .ubermenu-target.book-trip:hover {
            background-color: #FF2400;
            color: white;
        }

        /* Phần pre-header */
        .pre-header {
            background-color: #333;
            padding: 5px 0;
            color: white;
        }

        .pre-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Căn giữa theo chiều dọc */
            flex-wrap: nowrap; /* Không cho phép xuống dòng */
        }

        .pre-header ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding-left: 0;
            flex-wrap: nowrap; /* Không cho phép các item xuống dòng */
        }

        .pre-header ul li {
            margin-right: 15px; /* Khoảng cách giữa các item */
            white-space: nowrap; /* Không xuống dòng */
        }

        .pre-header ul li:last-child {
            margin-right: 0;
        }

        .pre-header a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            display: flex;
            align-items: center; /* Căn giữa theo chiều dọc */
            white-space: nowrap; /* Không cho phép nội dung xuống dòng */
        }

        .pre-header a:hover {
            color: #FF2400; /* Màu khi hover */
        }

        /* Phần biểu tượng tài khoản và giỏ hàng */
        .account-cart-icon .fas {
            margin-right: 5px;
        }

        /* Thiết kế cho kích thước màn hình nhỏ */
        @media (max-width: 768px) {
            .nav-bg {
                flex-direction: column;
                align-items: flex-start;
            }

            .ubermenu-nav {
                flex-direction: column;
            }

            .ubermenu-nav li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            .pre-header ul {
                flex-direction: column;
                align-items: flex-start;
            }

            .pre-header ul.account-cart-icon {
                margin-top: 10px;
            }
        }
        #site-header {
            background-image: url('/images/nav-bg.png'); 
        }
    </style>
</head>
<body>
    <div class="pre-header">
        <div class="container">
            <span>
                <ul class="social-icon">
                    <li><a href="/registration-select" title="Book Now">BOOK YOUR NEXT TRIP</a></li>
                    <li><a href="tel://1-206-378-1927">206.378.1927</a></li>
                </ul>
            </span>
            <ul class="account-cart-icon" id="aa">
                <li><a href="https://www.alpineascents.com/wp-login.php" title="Gear Account" class="aa-top-menu-link"><i class="fas fa-user fa-fw fa-btn" aria-hidden="true"></i><span class="top-menu-icon-text"> GEAR SHOP ACCOUNT </span></a></li>
                <li><a href="/cart" class="aa-top-menu-link"><i class="fas fa-shopping-cart fa-fw fa-btn" aria-hidden="true"></i><span class="top-menu-icon-text"> CART </span> (<span class="aa-current-cart-count">0</span>)</a></li>
            </ul>
        </div><!-- .container -->
    </div><!-- #pre-header -->
    <header id="site-header" class="group">
        <div class="container">
            <div class="nav-bg">
                <div class="site-logo"> <a href="/home" title="Alpine Ascents Vietnam"
                        rel="home"><img
                            src="/images/logovn.png"
                            alt="" /></a></div><!-- .site-logo -->
                <!-- UberMenu [Configuration:main] [Theme Loc:primary] [Integration:auto] --> <a
                    class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-none ubermenu-loc-primary ubermenu-responsive-toggle-content-align-right ubermenu-responsive-toggle-align-full ubermenu-responsive-toggle-icon-only "
                    tabindex="0" data-ubermenu-target="ubermenu-main-2-primary" aria-label="Toggle Main Menu"><i
                        class="fas fa-bars"></i></a>
                <nav id="ubermenu-main-2-primary"
                    class="ubermenu ubermenu-nojs ubermenu-main ubermenu-menu-2 ubermenu-loc-primary ubermenu-responsive ubermenu-responsive-1010 ubermenu-responsive-collapse ubermenu-horizontal ubermenu-transition-fade ubermenu-trigger-hover_intent ubermenu-skin-none  ubermenu-bar-align-right ubermenu-items-align-right ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-retractors-responsive ubermenu-submenu-indicator-closes">
                    <ul id="ubermenu-nav-main-2-primary" class="ubermenu-nav" data-title="Main Menu">
                        <li id="menu-item-21"
                            class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-current-page-ancestor ubermenu-item-has-children ubermenu-item-21 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega">
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only"
                                href="/tours" tabindex="0"><span
                                    class="ubermenu-target-title ubermenu-target-text">Tours</span></a>
                        </li>
                        <li id="menu-item-6279"
                            class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-6279 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto">
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only"
                                href="/galleries" tabindex="0"><span
                                    class="ubermenu-target-title ubermenu-target-text">Gallery</span></a>
                        </li>
                        <li id="menu-item-6279"
                            class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-6279 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto">
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only"
                                href="branches" tabindex="0"><span
                                    class="ubermenu-target-title ubermenu-target-text">Branches</span></a>
                        </li>
                        <li id="menu-item-22409"
                            class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-category ubermenu-item-22409 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto">
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only"
                                href="information" tabindex="0"><span
                                    class="ubermenu-target-title ubermenu-target-text">Information</span></a>
                        </li>
                        <li id="menu-item-22409"
                            class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-category ubermenu-item-22409 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto">
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only"
                                href="about-us" tabindex="0"><span
                                    class="ubermenu-target-title ubermenu-target-text">About Us</span></a>
                        </li>
                        <li id="menu-item-51892"
                            class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-51892 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto">
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only"
                                href="order" tabindex="0"><span
                                    class="ubermenu-target-title ubermenu-target-text">Book a Trip</span></a>
                        </li>
                    </ul>
                </nav> <!-- End UberMenu -->
            </div><!-- .nav-bg -->
        </div><!-- .container -->
    </header><!-- #site-header -->
    
    {{-- thêm slide/carousel --}}
    
    <div class="container">
        @yield('content')
    </div>

    {{-- thêm footer:
        - Alpine Ascents Vietnam
        - Slogan:
        - Địa chỉ:
        - Email:
        - Hotline:
        - positioning: --}}
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
