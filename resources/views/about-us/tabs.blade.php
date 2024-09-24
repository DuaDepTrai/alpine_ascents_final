@extends('layouts.app')  <!-- Inherit the common layout named 'app' -->

@section('content')  <!-- Start of the main content of the page -->

<div class="aboutus_container">  <!-- Container to create spacing around the content -->
    <div class="row">
        <div class="col-12">
            <!-- Tab Switch Button -->
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'overview')">Overview</button>
                <button class="tab-button" onclick="openTab(event, 'now_and_then')">Now and then</button>
                <button class="tab-button" onclick="openTab(event, 'director_statement')">Director's Statement</button>
                <button class="tab-button" onclick="openTab(event, 'achievements')">Achievements</button>
                <button class="tab-button" onclick="openTab(event, 'contact')">Contact</button>

            </div>

            <!-- Content of the tabs -->
            <div class="tab-content">
                <div id="overview" class="tab-pane" style="display: block;"> <!-- Overview tab content -->
                    <h2 style="font-style:italic">Overview</h2>
                    <p>The Alpine Ascents Vietnam website is a premier online destination for mountain climbing enthusiasts and nature explorers in Vietnam.</p>
                    <p>Designed to cater to both beginners and professional climbers, the website offers a rich and diverse resource of prominent destinations such as Fansipan, Bach Ma, Yen Tu, Pu Luong, and many other mountain ranges spanning from north to south.</p>
                    <p>With a user-friendly and easy-to-navigate interface, Alpine Ascents Vietnam allows users to easily search for information about hiking trails, terrain features, weather conditions, and the difficulty level of each location.</p>
                    <p>The website provides detailed guides, including personal preparation tips, a list of necessary gear, and important safety reminders. This helps users prepare thoroughly for each climb, ensuring a safe and enjoyable experience.</p>
                    <p>Additionally, Alpine Ascents Vietnam keeps users updated on the latest news about climbing events, international competitions, and community-related activities. Users can join the online community to share experiences, photos, and stories from challenging trips. The website also helps connect climbing groups and organize adventure tours with professional guides, enabling newcomers to confidently join exploration journeys.</p>
                    <p>With the mission of providing safe and memorable climbing experiences, Alpine Ascents Vietnam is not just an information provider but also a source of inspiration for those who love conquering nature, exploring peaks, and admiring Vietnam's majestic beauty. It truly is an essential companion for every climbing journey.</p>

                </div>

                <div id="now_and_then" class="tab-pane" style="display:none;"> <!-- Now and then tab content -->
                    <h2 style="font-style:italic">Now and then</h2>
                    <p>The Alpine Ascents Vietnam website was established in 2010 by a group of climbing enthusiasts with the mission to create a platform for sharing experiences and connecting the climbing community in Vietnam. Initially, the website was just a small forum where climbing enthusiasts could exchange information about routes and skills. However, with the rise of the climbing movement in Vietnam, Alpine Ascents Vietnam quickly developed into a reputable and comprehensive online resource.</p>
                    <p>Throughout its development, the website has continuously expanded its content and features to meet users' needs. From providing detailed information about famous mountain ranges to safety and preparation guides, the site has become an indispensable destination for anyone looking to conquer nature. Alpine Ascents Vietnam also connects with international climbing organizations, participates in environmental conservation programs, and promotes sustainable tourism.</p>
                    <p>With over a decade of operation, Alpine Ascents Vietnam is not just an information site but also a vibrant community where people can share their passion and desire to explore. Thanks to strong community support, the website has played a significant role in promoting the climbing movement in Vietnam, while also inspiring new generations of adventure sports enthusiasts.</p>
                </div>

                <div id="director_statement" class="tab-pane" style="display:none;"> <!-- Director's Statement tab content -->
                    <h2 style="font-style:italic">Director's Statement</h2>
                    <p>The mission of Alpine Ascents Vietnam is to become the leading resource for the mountain climbing and nature exploration community in Vietnam, providing reliable, up-to-date, and comprehensive information on routes, skills, and necessary equipment.</p>
                    <p>We are committed to promoting safe, sustainable climbing while connecting enthusiasts through community activities, events, and training programs.</p>
                    <p>Alpine Ascents Vietnam is not only a place to share experiences but also a source of inspiration, encouraging everyone to conquer new peaks, explore the country's majestic natural beauty, and protect the environment.</p>

                </div>

                <div id="achievements" class="tab-pane" style="display:none;"> <!-- Achievements tab content -->
                    <h2 style="font-style:italic">Achievements</h2>
                    <p>The Alpine Ascents Vietnam website is proud to have achieved many significant milestones and received prestigious awards throughout its operation. Since its launch, we have been recognized by the climbing community and related organizations for our continuous efforts in providing accurate, up-to-date, and comprehensive information on climbing routes in Vietnam.</p>
                    <p>We were honored with the "Best Adventure Tourism Website" award at the National Tourism Awards in 2018, thanks to our creation of a user-friendly and accessible platform for climbing enthusiasts. Additionally, **Alpine Ascents Vietnam** received the "Innovation in Information Technology" award in 2020 from the Vietnam Information Technology Association, acknowledging the innovations and new features we continually update to enhance the user experience.</p>
                    <p>We are also proud to be strategic partners in many environmental conservation and sustainable tourism development projects, as recognized by the "Outstanding Contribution to Environmental Protection" award in 2022. These achievements not only demonstrate our commitment to quality and safety but also affirm our role in promoting the climbing movement and protecting nature in Vietnam.</p>

                </div>

                <div id="contact" class="tab-pane" style="display:none;"> <!-- Contact tab content -->
                    <h2 style="font-style:italic">Contact</h2>
                    <p>We look forward to receiving your feedback and questions! If you have any inquiries or need assistance, please feel free to contact us via the form below. Our customer support team will get back to you as soon as possible. Alternatively, you can call or email us directly using the provided contact information. We are always ready to serve you!</p>
                    
                  
                </div>

            </div>
        </div>
    </div>
</div>
@endsection  <!-- End of the main content -->

@push('scripts') <!-- Push JavaScript code to the "scripts" stack -->
<script>
     // Ensure the 'Overview' tab is opened by default when the page loads
     document.addEventListener("DOMContentLoaded", function(event) {
        // Simulate click on the default active tab button
        document.querySelector('.tab-button.active').click();
    });
    // Function to open a tab and display the corresponding content
    function openTab(evt, tabName) {
        var i, tabContent, tabButtons;

        // Hide all tab content
        tabContent = document.getElementsByClassName("tab-pane");
        for (i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        // Remove "active" class from all buttons
        tabButtons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        // Show the content of the selected tab and add "active" class to that button
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }
</script>
@endpush   <!-- End of the JavaScript code -->

@push('styles')  <!-- Push CSS code to the "styles" stack -->
<style>
    .aboutus_container {
        width: 70%;
        margin: 0 auto;
    }
    .tab-content {  /* Layout for the tab content */
        margin-top: 20px;
    }
    .tab-button {  /* Tab button styles */
        border: none;
        background-color: transparent;
        font-weight: bold;
        cursor: pointer;
        padding: 10px 20px;
    }
    .tab-button.active {  /* Styles for the selected button */
        border-bottom: 2px solid orange;
        color: orange;
    }
</style>
@endpush  <!-- End of the CSS code -->
