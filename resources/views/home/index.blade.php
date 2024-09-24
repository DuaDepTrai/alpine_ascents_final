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
            <p>
                Join Alpine Ascent Vietnam for the ultimate climbing adventure and experience the thrill of conquering some of the most breathtaking peaks in the country! Whether you're a seasoned climber or a beginner, our carefully curated mountain tours are designed to challenge and inspire you every step of the way. 
            </p>
            <p>
                As you explore Vietnam's stunning highlands, you'll be immersed in the natural beauty of towering mountains, lush forests, and remote landscapes, creating memories that will last a lifetime.
            </p>
            <p>
                Our expert guides, with their deep knowledge of the terrain and passion for the outdoors, ensure a safe and exhilarating experience for every adventurer. From the adrenaline rush of the climb to the sense of accomplishment at the summit, each moment is crafted to push your limits and fuel your spirit. 
            </p>
            <p>
                Join us on this unforgettable journey and let the mountains of Vietnam awaken your adventurous soul!
            </p>
            <a href="/tours"><button class="tour_button" id="tour_button">OUR CLIMBING TOURS</button></a>
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
            <p class="text-start">
                Welcome to the awe-inspiring beauty of Vietnam's mountain ranges! Prepare to immerse yourself in breathtaking landscapes, where towering peaks and lush, verdant valleys await your exploration. Whether you're seeking adventure or serenity, the majestic mountains of Vietnam promise an unforgettable experience for all.
            </p>
            <a href="/galleries"><button class="gallery_button" id="gallery_button">GALLERY</button></a>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8 p-3 contents">
            <h3 class="heading">INFORMATION AND TECHNIQUE</h3>
            <p>Our mountain climbing tours provide a diverse range of thrilling adventures, carefully tailored to suit different skill levels.</p>
            <p>Whether you're a novice or an experienced climber, we offer everything from beginner-friendly hikes to more challenging ascents, each designed to highlight the breathtaking beauty of Vietnam's diverse landscapes. </p>
            <p>Our experienced guides are dedicated to ensuring your safety and skill development, offering detailed instruction on essential mountaineering techniques.</p>
            <p>You'll gain valuable knowledge, including the proper use of climbing gear, navigation through rugged terrain, and essential safety protocols. </p>
            <p>Join us for an unforgettable journey where you’ll not only explore the stunning outdoors but also develop your climbing abilities under expert guidance.</p>
            <a href="/information"><button class="information_button" id="information_button">MORE INFORMATION</button></a>
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
            <p class="text-start">Alpine Ascent Vietnam operates a global network of branches, offering expert climbing experiences across the world. </p>
            <p>No matter where you are, our international presence guarantees high-quality mountaineering guidance, ensuring that you can embark on your climbing adventure with confidence and professional support. </p>
            <p>From local peaks to international summits, we bring the same level of expertise and dedication to every expedition.            </p>
            <a href="/branches"><button class="branches_button" id="branches_button">OUR BRANCHES</button></a>
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
