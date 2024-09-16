@extends('layouts.app')

@section('content')

<div class="custom_container d-block mx-auto">
    <div class="welcome mx-auto mt-4 mb-5">
        <h3 class="heading">WELCOME TO ALPINE ASCENT VIETNAM</h3>
        <div class="welcome_para d-flex">
            <p>Introducing Alpine Ascent Vietnam, where climbing passion meets endless adventure! Our website offers comprehensive information on climbing trips, training courses, and support for climbers of all skill levels. This year, we’re expanding our programs and introducing new routes, including unique destinations both domestically and internationally. Our mission is to provide safe, inspiring climbing experiences that help you reach new heights and achieve your goals.</p>
            <div class="seperate"></div>
            <p>At Alpine Ascent Vietnam, we are committed to providing top-quality climbing services and dedicated support for each client. Our goal is to offer challenging and exciting journeys while building a growing community of climbing enthusiasts. With our team of professional guides and modern equipment, we aim to make each of your trips a memorable and meaningful experience. Join us in exploring the majestic beauty of the mountains and tackling new challenges!</p>
        </div>
    </div>

    <div class="container_tour mx-auto mb-3 d-flex">
        <div class="custom_container_left p-4">
            <h3 class="heading">JOIN US ON THE CLIMBING ADVENTURE</h3>
            <p>Experience the thrill of adventure with Alpine Ascent Vietnam's mountain tours! Conquer breathtaking peaks, explore stunning landscapes, and immerse yourself in the beauty of Vietnam's highlands. Our expert guides ensure a safe and unforgettable journey, whether you're a seasoned climber or a beginner. Join us for an adventure that will challenge and inspire you!</p>
            <button class="tour_button" id="tour_button">OUR CLIMBING TOURS</button>
        </div>
        <div class="custom_container_right ms-3">
            <img class="img_tour" src="images/home/img_tour.png" alt="">
        </div>
    </div>

    <div class="container_gallery mx-auto mb-3 d-flex">
        <div class="custom_container_left">
            <img class="img_gallery" src="images/home/img_gallery.png" alt="">
        </div>
        <div class="custom_container_right ms-3 p-4">
            <h3 class="heading">GALLERY</h3>
            <p class="text-start">Welcome to the breathtaking beauty of Vietnam's mountain ranges! Immerse yourself in the stunning landscapes and majestic peaks that await you.</p>
            <button class="gallery_button" id="gallery_button">GALLERY</button>
        </div>
    </div>

    <div class="container_information mx-auto mb-3 d-flex">
        <div class="custom_container_left p-4">
            <h3 class="heading">INFORMATION AND TECHNIQUE</h3>
            <p>Our mountain climbing tours offer a range of exciting adventures tailored to various skill levels. From beginner-friendly hikes to challenging ascents, each tour is designed to showcase the stunning beauty of Vietnam's landscapes. Our experienced guides will provide detailed instruction on essential mountaineering techniques, ensuring safety and skill development. You'll learn key climbing skills, such as proper use of gear, navigation, and safety protocols.</p>
            <button class="information_button" id="information_button">MORE INFORMATION</button>
        </div>
        <div class="custom_container_right ms-3">
            <img class="img_information" src="images/home/img_information.png" alt="">
        </div>
    </div>

    <div class="container_branches mx-auto mb-3 d-flex">
        <div class="custom_container_left">
            <img class="img_branches" src="images/home/img_branches.png" alt="">
        </div>
        <div class="custom_container_right ms-3 p-4">
            <h3 class="heading">OUR BRANCHES</h3>
            <p class="text-start">Alpine Ascent Vietnam has global branches, providing expert climbing experiences worldwide. Our international network ensures top-notch mountaineering guidance wherever you are.</p>
            <button class="branches_button" id="branches_button">OUR BRANCHES</button>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<style>
    .custom_container{
    width: 95%;
    }
    .container_tour{
        display: flex;
    }
    .welcome{
        width: 82%;
    }
    /* custom underline */
    .heading{
        text-decoration: underline;
        text-decoration-color: #5c715e;
        text-decoration-thickness: 5px;
        text-underline-offset: 8px;
        margin-bottom: 15px;
        font-family: 'Inria Sans', sans-serif;
    }

    p{
        text-align: justify;
        font-size: 17px;
    }
    .seperate{
        margin-left: 30px;
        margin-right: 30px;
        width: 0.1px;
        height: 230px;
    }
    /* L - R */
    .custom_container_left{
        box-sizing: border-box;
        width: 750px;
        height: 315px;
        background-color: #ddeedf;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    .custom_container_right{
        box-sizing: border-box;
        width: 315px;
        height: 315px;
        background-color: #ddeedf;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    .img_tour,.img_information{
        width: 315px;
        height: 315px;
    }
    .img_gallery,.img_branches{
        width: 750px;
        height: 315px;
    }
</style>
@endpush
