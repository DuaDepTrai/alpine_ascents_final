@extends('layouts.app')  <!-- Kế thừa layout chung có tên là 'app' -->

@section('content')  <!-- Bắt đầu phần nội dung chính của trang -->

<div class="container mt-5">  <!-- Container để tạo khoảng cách xung quanh nội dung -->
    <div class="row">
        <div class="col-12">
            <!-- Nút Chuyển Tab -->
            <div class="tabs">
                <button class="tab-button active" onclick="openTab(event, 'overview_history')">Overview and History</button>
                <button class="tab-button" onclick="openTab(event, 'types_forms')">Types and Forms</button>
                <button class="tab-button" onclick="openTab(event, 'technique')">Technique</button>
                <button class="tab-button" onclick="openTab(event, 'shelter')">Shelter</button>
                <button class="tab-button" onclick="openTab(event, 'danger')">Danger</button>
                <button class="tab-button" onclick="openTab(event, 'record')">Records</button>
            </div>

            <!-- Nội dung của các tab -->
            <div class="tab-content">
                <div id="overview_history" class="tab-pane" style="display: block;"> <!-- Phần nội dung tab "Giới thiệu" -->
                    <h2 style="font-style:italic">Overview and History</h2>
                    <p>Welcome to the website of Alpine Ascents Vietnam – the ideal destination for those who are passionate about exploring and conquering the majestic mountain peaks of Vietnam. We are an organization specializing in providing high-quality mountain climbing and trekking tours, offering you the opportunity to experience exciting challenges and breathtaking scenery. Founded with the mission to connect mountain and nature lovers, Alpine Ascents Vietnam is committed to providing professional, safe, and dedicated services.</p>
                    <img src="images/tf_walking.png">
                    <p>Our website offers detailed information about climbing trips and exploration journeys, from the highest peaks like Fansipan, Ba Na, to the scenic trekking routes in national parks and nature reserves. We are proud to be partners with many experienced guides and mountain climbing experts, ready to accompany you every step of the way, from equipment preparation to technical and safety support.</p>
                    <p>At Alpine Ascents Vietnam, we understand that each journey is a personal adventure, so we offer flexible tour packages tailored to various skill levels and preferences. You can easily find detailed information on schedules, prices, and support services on our website. Additionally, we provide helpful articles and guides to help you prepare your best for the trip.</p>
                    <p>Join us in discovering the pristine beauty and grandeur of Vietnam's nature through our mountain climbing and trekking tours. Don’t hesitate to contact us for dedicated advice and detailed information about the trips. Alpine Ascents Vietnam looks forward to accompanying you on every step of your journey, so that each trip is not just a conquest, but also a memorable experience.</p>
                    <h3 style="font-style:italic">Formation History</h3>
                    <p>The Alpine Ascents Vietnam website was established in 2010 by a group of passionate mountaineers with the desire to create a platform for sharing experiences and connecting the mountain climbing community in Vietnam. Initially, the website was just a small forum where mountain sports enthusiasts could exchange information about routes, climbing techniques, and personal experiences. However, with the rapid growth of the climbing and trekking movement in Vietnam, Alpine Ascents Vietnam quickly expanded and became a reputable and comprehensive online resource in this field.</p>
                    <p>Throughout its development, Alpine Ascents Vietnam has continuously expanded its content and features to better meet users’ needs. The website now provides detailed information about famous mountain ranges such as Fansipan, Ba Na, and other notable trekking areas, along with in-depth guides on gear preparation, safety in climbing, and essential techniques. Notably, we also offer articles and instructional videos to help users easily grasp and apply the necessary knowledge before each trip.</p>
                    <p>Alpine Ascents Vietnam also connects with many international climbing organizations and communities, actively participating in environmental protection programs and promoting sustainable tourism. We collaborate with NGOs and conservation groups to protect valuable mountain areas while raising awareness of the importance of preserving nature for future generations.</p>
                    <p>With over a decade of activity, Alpine Ascents Vietnam is not only an information website but also a vibrant and cohesive community where people can share their passion and desire to explore. We organize events, workshops, and community trips to connect mountain enthusiasts, giving them opportunities to meet and learn from each other. Thanks to strong support from the community, the website has contributed significantly to promoting the climbing movement in Vietnam while inspiring new generations of adventure sports lovers.</p>
                    <p>Alpine Ascents Vietnam is proud to be part of the thriving mountain climbing community and hopes to continue serving as an important bridge between mountain lovers and the majestic beauty of Vietnam’s nature in the years to come.</p>

                </div>

                <div id="types_forms" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Các Loại Hình Thức" -->
                    <h3 style="font-style:italic">Walking</h3>
                    <p>Walking is the activity of moving by walking on the ground, typically done on flat or slightly sloped terrain. It is the most basic form of movement and can be performed anywhere, from parks and sidewalks to trails in urban areas. In mountaineering, walking often serves as a starting phase or part of a longer journey, helping participants acclimate to the environment and maintain physical fitness. While walking does not require much technique or special equipment, choosing suitable shoes and protecting the body from weather is crucial for comfort and safety.</p>
                    <img src="/images/information/tf_walking.png">

                    <h3 style="font-style:italic">Trekking</h3>
                    <p>Trekking is an activity that explores more remote and wild areas, often requiring movement on complex trails or rugged terrain. This form of mountaineering is more adventurous than walking and demands good health, navigation skills, and the ability to handle challenging situations. Trekking usually lasts several days and involves carrying camping gear, food, and water. This activity not only offers a close connection to nature but also helps build endurance and adaptability to harsh environments.</p>
                    <img src="/images/information/tf_trekking.png">

                    <h3 style="font-style:italic">Hiking</h3>
                    <p>Hiking is a form of mountaineering that combines walking and trekking, usually performed on mountain trails or steeper terrain. This activity can last from a few hours to several days, depending on the difficulty of the terrain and the goal of the trip. Hiking typically requires participants to have adequate equipment such as hiking boots, backpacks, water, and snacks. It may also include climbing peaks or traversing difficult paths, challenging participants while allowing them to enjoy stunning landscapes. Navigation skills and thorough preparation are key to ensuring a safe and enjoyable trip.</p>
                    <img src="/images/information/tf_hiking.png">

                    <h3 style="font-style:italic">Traditional Climbing</h3>
                    <p>Traditional climbing, often referred to as "trad climbing," is a method of climbing where the climber uses protection equipment to create anchor points in natural cracks or rock formations on the cliff. This is the most classic form of climbing, requiring climbers to install and remove protective gear throughout the climb. In traditional climbing, devices like cams, nuts, and slings are used to ensure safety on routes without fixed anchors. This method not only demands high technical skill but also requires precise judgment and extensive experience in selecting appropriate gear for each climbing section.</p>
                    <img src="/images/information/tf_trad_climbing.png">

                    <h3 style="font-style:italic">Sport Climbing</h3>
                    <p>Sport climbing is a style of climbing that focuses on conquering rock faces equipped with pre-installed anchor points and bolts. These protective points are securely fixed to the rock, allowing climbers to focus solely on overcoming challenges and climbing techniques. Sport climbing often uses harnesses, carabiners, and ropes to create an effective protection system. This is a popular climbing method in developed and equipped climbing areas, reducing risks and allowing climbers to concentrate on technique and strength.</p>
                    <img src="/images/information/tf_sport_climbing.png">

                    <h3 style="font-style:italic">Bouldering</h3>
                    <p>Bouldering is a unique form of climbing focused on climbing large boulders or low rock faces without using protective gear or ropes. This type of climbing requires strength and precision in every move. Bouldering climbers often use crash pads to minimize the risk of injury from falls or slips. Bouldering exercises are commonly performed on natural boulders or in indoor bouldering gyms, where climbing problems are designed and changed frequently to challenge climbers.</p>
                    <img src="/images/information/tf_bouldering.png">

                    <h3 style="font-style:italic">Ice Climbing</h3>
                    <p>Ice climbing is a specialized form of climbing focused on ice walls or snow, requiring the use of equipment such as ice screws, ice tools, and special climbing ropes. In ice climbing, climbers use tools to secure themselves in ice while climbing frozen waterfalls or ice-covered routes. This method requires not only technical climbing skills but also thorough preparation regarding equipment and an in-depth understanding of weather conditions and ice structures. Ice climbing is typically performed in high mountain areas where icy conditions are suitable, making it one of the most challenging forms of climbing.</p>
                    <img src="/images/information/tf_ice_climbing.png">
                </div>

                <div id="technique" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Kỹ Thuật" -->
                    <h2 style="font-style:italic">Technique</h2>
                    <p>This is the basic technique to ensure the climber's safety. When climbing, one person is responsible for securing the safety rope for the lead climber, ensuring that in the event of a slip or fall, the climber is held in place. A belay device is used to adjust the rope tension and absorb shock in case of an incident.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Free Climbing Technique</h5>
                    <p>This is a climbing technique that only uses hands and feet to climb, while ropes and other equipment are used solely for protection in case of a fall. Climbers need flexibility, endurance, and good balancing skills to move smoothly across rocks or difficult surfaces.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Aid Climbing Technique</h5>
                    <p>In contrast to free climbing, this technique uses equipment like hooks, clamps, or ropes to assist the climber, especially when the surface is too difficult or lacks proper handholds and footholds.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Knots Technique</h5>
                    <p>Knot-tying skills are essential. Common knots like the figure-eight knot, double knot, or bowline knot help create secure and safe connections between ropes, climbers, and other supporting equipment.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Pacing and Breathing Technique</h5>
                    <p>When climbing, maintaining regular breathing and controlling the pace is crucial. Moving too fast can lead to exhaustion, especially on long climbs. Stable breathing helps maintain strength and focus throughout the climb.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Footwork and Grip Technique</h5>
                    <p>Proper foot placement and grip are key to ensuring safety and efficiency. Climbers need to learn how to position their body weight and use leg strength rather than just relying on their hands for climbing. This helps conserve energy and improve balance.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Route Finding Technique</h5>
                    <p>The ability to navigate and choose a safe path is an essential part of climbing. Before starting a climb, participants must carefully observe the terrain, anticipate challenges and risks, and choose the best route accordingly.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Gear Management Technique</h5>
                    <p>Knowing how to use and maintain climbing gear such as carabiners, ropes, harnesses, and helmets is critical. Climbers must thoroughly check their equipment before climbing to ensure they function well, thereby minimizing risks.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Communication Technique</h5>
                    <p>Clear communication between the climber and the belayer is vital in climbing. Verbal cues and hand signals are often used to convey important information such as requests for more rope, stopping, or emergencies.</p>

                    <h5 style="font-style:italic; font-weight:bold;">Ice Climbing Technique</h5>
                    <p>When climbing during winter or on icy surfaces, climbers need to use additional equipment such as crampons, ice axes, and ice screws to grip and ascend slippery surfaces. This technique requires high concentration and skills, as the harsh weather conditions and the risk of avalanches pose significant dangers.</p>

                    <p>Climbing is a challenging sport that offers many physical and mental rewards. These techniques help climbers overcome obstacles and conquer mountain peaks while ensuring the safety of themselves and their teammates throughout the journey.</p>

                </div>

                <div id="shelter" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Nơi Trú Ẩn" -->
                    <h2 style="font-style:italic">Shelter</h2>

                        <p>This is a shelter set up at the base of the mountain or the starting point of a long climbing expedition. The camp usually consists of large tents where climbers can rest, prepare food, and gear up before advancing to more dangerous altitudes. These camps are often located near a water source, in safe camping areas, and in regions with less harsh climates compared to higher elevations.</p>

                        <h5 style="font-style:italic; font-weight:bold;">Tent</h5>
                        <p>The tent is the most common form of portable shelter in climbing. Modern tents are designed to be compact, lightweight, waterproof, and wind-resistant, suitable for the harsh weather conditions of the mountains. Tents can be set up at temporary stops when climbers need to rest during long journeys. Some tents also come with thermal insulation features for areas with snow.</p>

                        <h5 style="font-style:italic; font-weight:bold;">Cave</h5>
                        <p>In high mountain regions with complex terrain, natural caves can become ideal shelters. Caves protect climbers from strong winds and rain; however, it’s essential to thoroughly check the cave to ensure it is safe before use. Deep caves may provide more space than tents, but they are usually colder and more humid, so sleeping bags or insulation mats are necessary to keep warm.</p>

                        <h5 style="font-style:italic; font-weight:bold;">Mountain Huts</h5>
                        <p>In high mountain areas, especially at popular climbing spots, local authorities or climbing organizations may construct small wooden huts or shelters for climbers. These provide enclosed shelter, protection from wind and rain, and may offer basic amenities like cooking facilities or beds. Mountain huts are usually located at fixed resting points, allowing climbers to recharge and refuel.</p>

                        <h5 style="font-style:italic; font-weight:bold;">Shelter</h5>
                        <p>On popular climbing routes, many countries have built small emergency shelters to provide refuge in case of sudden bad weather. These shelters are not large and lack many amenities, but they are sufficient to protect climbers from the elements. They are often scattered along long climbing routes, allowing climbers to rest without needing to set up tents.</p>

                        <h5 style="font-style:italic; font-weight:bold;">Igloo and Snow Shelter</h5>
                        <p>In snowy mountain regions, snow shelters or igloos are viable options in emergency situations. Climbers can build these shelters by using snow-cutting tools to create thick walls that insulate and protect from cold winds. However, constructing an igloo requires experience and skill, as the structure must be solid and safe.</p>

                        <p>Climbing is a challenging sport that offers many physical and mental rewards. These techniques help climbers overcome obstacles and conquer mountain peaks while ensuring the safety of themselves and their teammates throughout the journey.</p>

                </div>

                <div id="danger" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Các Mối Nguy Hiểm" -->
                    <h2 style="font-style:italic">Danger</h2>
                        <p>Another danger is <strong>landslides and rockfalls</strong>. Mountainous terrain is often unstable, especially after heavy rains or bad weather. Rocks and soil can unexpectedly tumble down from higher elevations, posing a serious risk to climbers below. This is why monitoring weather conditions and terrain stability is extremely important before starting a climb.</p>

                        <p><strong>Extreme weather</strong> is also a significant danger in mountaineering. At high altitudes, the weather can change rapidly from clear skies to storms, strong winds, or snow. Sudden weather shifts not only reduce visibility but also make the terrain more treacherous. Climbers must be equipped with waterproof clothing, insulation, and essential gear to handle adverse weather conditions.</p>

                        <p>At high elevations, <strong>altitude sickness</strong> is a concerning hazard. At altitudes above 2,500 meters, thin air and reduced oxygen levels can cause symptoms like dizziness, nausea, shortness of breath, and fatigue. If not addressed promptly, altitude sickness can lead to cerebral or pulmonary edema, which can be fatal. Gradual acclimatization and a slow ascent are crucial to minimizing this risk.</p>

                        <p>Another common issue is <strong>getting lost</strong>. On mountains, especially in areas with complex terrain and few recognizable landmarks, climbers can easily lose their way. Dense fog or the lack of navigation tools can disorient climbers, causing them to spend more time searching for the right path and increasing the likelihood of encountering other dangers like bad weather or dehydration.</p>

                        <p><strong>Dehydration and malnutrition</strong> are also risks during mountaineering. At high altitudes, climbers often face rapid dehydration due to temperature changes and high energy demands. Lack of water and proper nutrition not only deteriorates physical health but also impairs mental focus, increasing the chance of accidents. Therefore, it's crucial to prepare adequate water and food supplies for the journey.</p>

                        <p>Finally, <strong>equipment failure</strong> can lead to serious danger. Climbing gear such as ropes, carabiners, or shoes, if not thoroughly inspected before climbing or if they malfunction mid-climb, can cause severe accidents. Ensuring the use of high-quality gear and conducting regular checks is essential for safety.</p>

                        <p>Mountaineering not only requires physical endurance but also demands that participants understand the inherent risks and have a plan to address them. From weather and terrain hazards to personal health concerns, careful preparation and proper equipment are the best ways to reduce risks when conquering great heights.</p>

                </div>

                <div id="record" class="tab-pane" style="display:none;"> <!-- Phần nội dung tab "Kỷ Lục" -->
                    <h2 style="font-style:italic">Record</h2>
                        <p>Alpine Ascent Vietnam is a specialized website for mountaineering and nature exploration, achieving remarkable success in the field of adventure tourism. Founded with a mission to promote a love for nature and respect for the environment, Alpine Ascent Vietnam quickly established its reputation within the international mountaineering community. One of its most significant achievements is organizing professional mountain expeditions, offering challenging experiences for thousands of participants from around the world. These journeys not only allow climbers to discover Vietnam's majestic peaks but also help them build physical endurance and mental resilience.</p>

                        <p>Another notable aspect of Alpine Ascent Vietnam is its collaboration with international mountaineering experts to ensure that all climbing programs adhere to the highest safety standards. Thanks to this, the website has won numerous prestigious awards for safety and mountaineering organization, especially from tourism and environmental organizations. This recognition solidifies Alpine Ascent Vietnam's reputation for organizing not only challenging but also safe and reliable mountain expeditions.</p>

                        <p>The website has also been honored by various travel magazines and organizations for its contributions to sustainable tourism and nature conservation. By combining mountaineering activities with environmental education, Alpine Ascent Vietnam has created significant value for both the local community and international tourists. This is reflected in the positive feedback from participants and the high ratings it receives on online travel platforms.</p>

                        <p>Additionally, Alpine Ascent Vietnam has garnered many awards for community development. The website frequently organizes charity programs to assist ethnic minority communities living in remote mountainous areas. These recognitions are not only a testament to their community efforts but also a motivation for the website to continue growing and spreading the love for nature.</p>

                        <p>With its numerous accomplishments and awards, Alpine Ascent Vietnam is more than just a travel website—it's a bridge between people and nature. Their programs focus not only on exploration but also on raising awareness about conservation and sustainable development.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection  <!-- Kết thúc phần nội dung -->

@push('scripts') <!-- Đẩy mã JavaScript vào stack "scripts" -->
<script>
        // Đảm bảo tab 'Overview' được mở mặc định khi trang tải
     document.addEventListener("DOMContentLoaded", function(event) {
        // Simulate click on the default active tab button
        document.querySelector('.tab-button.active').click();
    });
    // Hàm để mở tab và hiển thị nội dung tương ứng
    function openTab(evt, tabName) {
        var i, tabContent, tabButtons;

        // Ẩn tất cả nội dung của các tab
        tabContent = document.getElementsByClassName("tab-pane");
        for (i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        // Xóa class "active" khỏi tất cả các nút
        tabButtons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        // Hiển thị nội dung của tab được chọn và thêm class "active" vào nút đó
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }
</script>
@endpush  <!-- Kết thúc phần mã JavaScript -->

@push('styles')  <!-- Đẩy mã CSS vào stack "styles" -->
<style>
    .tab-content {  /* Cách trình bày nội dung của tab */
        margin-top: 20px;
    }
    .tab-button {  /* Định dạng nút tab */
        border: none;
        background-color: transparent;
        font-weight: bold;
        cursor: pointer;
        padding: 10px 20px;
    }
    .tab-button.active {  /* Định dạng nút khi được chọn */
        border-bottom: 2px solid orange;
        color: orange;
    }
</style>
@endpush  <!-- Kết thúc phần mã CSS -->
