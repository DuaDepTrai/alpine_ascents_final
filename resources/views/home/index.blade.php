@extends('layouts.app')

@section('content')
<div class="banner-image">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($tours as $tour)
                <div class="swiper-slide">
                    <div class="header-image" style="background-image: url('{{ asset($tour->image) }}');">
                    </div><!-- .header-image -->
                </div><!-- .swiper-slide -->
            @endforeach
        </div><!-- .swiper-wrapper -->
    </div><!-- .swiper-container -->
</div><!-- .banner-image -->
<div class="home_custom_container mx-auto">
    <div class="row mb-4">
        <div class="col-9 mx-auto mb-5">
            <h3 class="heading">WELCOME TO ALPINE ASCENT VIETNAM</h3>
            <div class="welcome_para d-flex">
                <p>Introducing Alpine Ascent Vietnam, where climbing passion meets endless adventure! Our website offers comprehensive information on climbing trips, training courses, and support for climbers of all skill levels. This year, we’re expanding our programs and introducing new routes, including unique destinations both domestically and internationally. Our mission is to provide safe, inspiring climbing experiences that help you reach new heights and achieve your goals.</p>
                <div class="seperate ms-4 me-4"></div>
                <p>At Alpine Ascent Vietnam, we are committed to providing top-quality climbing services and dedicated support for each client. Our goal is to offer challenging and exciting journeys while building a growing community of climbing enthusiasts. With our team of professional guides and modern equipment, we aim to make each of your trips a memorable and meaningful experience. Join us in exploring the majestic beauty of the mountains and tackling new challenges!</p>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8 p-3 contents">
            <h3 class="heading">JOIN US ON THE CLIMBING ADVENTURE</h3>
            <p>Experience the thrill of adventure with Alpine Ascent Vietnam's mountain tours! Conquer breathtaking peaks, explore stunning landscapes, and immerse yourself in the beauty of Vietnam's highlands. Our expert guides ensure a safe and unforgettable journey, whether you're a seasoned climber or a beginner. Join us for an adventure that will challenge and inspire you!</p>
            <button class="tour_button" id="tour_button">OUR CLIMBING TOURS</button>
        </div>
        <div class="col-4 p-0 imgs">
            <img class="img_tour" src="images/home/img_tour.png" alt="">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8 p-0 imgs">
            <img class="img_gallery" src="images/home/img_gallery.png" alt="">
        </div>
        <div class="col-4 p-3 contents">
            <h3 class="heading">GALLERY</h3>
            <p class="text-start">Welcome to the breathtaking beauty of Vietnam's mountain ranges! Immerse yourself in the stunning landscapes and majestic peaks that await you.</p>
            <button class="gallery_button" id="gallery_button">GALLERY</button>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8 p-3 contents">
            <h3 class="heading">INFORMATION AND TECHNIQUE</h3>
            <p>Our mountain climbing tours offer a range of exciting adventures tailored to various skill levels. From beginner-friendly hikes to challenging ascents, each tour is designed to showcase the stunning beauty of Vietnam's landscapes. Our experienced guides will provide detailed instruction on essential mountaineering techniques, ensuring safety and skill development. You'll learn key climbing skills, such as proper use of gear, navigation, and safety protocols.</p>
            <button class="information_button" id="information_button">MORE INFORMATION</button>
        </div>
        <div class="col-4 p-0 imgs">
            <img class="img_information" src="images/home/img_information.png" alt="">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8 p-0 imgs">
            <img class="img_branches" src="images/home/img_branches.png" alt="">
        </div>
        <div class="col-4 p-3 contents">
            <h3 class="heading">OUR BRANCHES</h3>
            <p class="text-start">Alpine Ascent Vietnam has global branches, providing expert climbing experiences worldwide. Our international network ensures top-notch mountaineering guidance wherever you are.</p>
            <button class="branches_button" id="branches_button">OUR BRANCHES</button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true, // Bật vòng lặp
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Cho phép nhấp vào phân trang
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000, // Thời gian giữa các slide
            disableOnInteraction: false, // Tiếp tục autoplay khi tương tác
        },
    });
</script>
@endpush
@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<style> 
    .home_custom_container{
        width: 80%;
        padding-top: 40px;
    }    
    .heading{
        text-decoration: underline;
        text-decoration-color: #5c715e;
        text-decoration-thickness: 5px;
        text-underline-offset: 3px;
        margin-bottom: 15px;
        font-family: 'Inria Sans', sans-serif;
    }
    .row{
        min-height: 300px;
        overflow: hidden;
    }
    .col{
        min-height: 300px;
        overflow: hidden;
    }
    p{
        text-align: justify;
        font-size: 17px;
    }
    .seperate{
        width: 0.1px;
        height: 230px;
    }
    /* L - R */
    .contents{
        box-sizing: border-box;
        background-color: #ddeedf;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    .imgs{
        box-sizing: border-box;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    .img_tour,.img_information{
        width: 100%;
        height: 100%;
        overflow: hidden;
        
    }
    .img_gallery,.img_branches{
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
</style>
@endpush
