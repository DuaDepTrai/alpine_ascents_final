<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>

<style>
    h1 {
        margin-left: 50px;
    }

    button {
        font: bold 1.2rem "Fira Sans", sans-serif;
        height: 40px;
        padding: 10px;
        margin-left: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border: none;
        background-color: #5c715e;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);

    }

    #overview_history {
        margin-left: 50px;
    }

    #para {
        font: 1.2rem "Fira Sans", sans-serif;
        padding: 20px 50px;
        margin-left: 15px;
        margin-right: 15px;
        margin-bottom: 15px;
        border-radius: 10px;
        background-color: #ddeedf;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
    }

    p {
        font: 1.2rem "Fira Sans", sans-serif;
        display: block;
        line-height: 1.6;
    }

    #btns {
        margin: auto;
        white-space: nowrap;
        overflow: hidden;
    }

    .danger_bold{
        font-weight: bold;
    }
</style>

<body>
    <h1>About Us</h1>
    <div id="btns">
        <button id="overview_history">Overview and History</button>
        <button id="types_forms">Types and Forms</button>
        <button id="technique">Technique</button>
        <button id="shelter">Shelter</button>
        <button id="danger">Danger</button>
        <button id="record">Records</button>
    </div>

    <div id="para"></div>
</body>

<script>
    let overview_history = `
        <div>
            <h3 style="font-style:italic">Overview</h3>
            <p>Welcome to the website of Alpine Ascents Vietnam – the ideal destination for those passionate about exploring and conquering the majestic peaks of Vietnam. We are an organization specializing in providing high-quality mountain climbing and trekking tours, offering you the opportunity to experience thrilling challenges and breathtaking scenery. Founded with the mission to connect mountain and nature lovers, Alpine Ascents Vietnam is committed to providing professional, safe, and dedicated services.</p>
            <p>Our website provides detailed information about climbing trips and exploration journeys, from the highest peaks like Fansipan and Ba Na, to picturesque trekking routes in national parks and nature reserves. We are proud to partner with many experienced guides and mountaineering experts, ready to accompany you every step of the way, from equipment preparation to technical and safety support.</p>
            <p>At Alpine Ascents Vietnam, we understand that every journey is a personal adventure, so we offer flexible tour packages suitable for different skill levels and preferences. You can easily find detailed information about schedules, prices, and support services on our website. Additionally, we provide helpful articles and guides to help you best prepare for your trip.</p>
            <p>Join us in exploring the pristine beauty and grandeur of Vietnam’s nature through our mountain climbing and trekking tours. Don’t hesitate to contact us for detailed consultation and information about our trips. Alpine Ascents Vietnam looks forward to accompanying you on every step of your journey, making each trip not only a conquest but also an unforgettable experience.</p>

            <h3 style="font-style:italic">History</h3>
            <p>The Alpine Ascents Vietnam website was founded in 2010 by a group of enthusiastic mountaineers with the desire to create a platform for sharing experiences and connecting the mountaineering community in Vietnam. In the beginning, the website was merely a small forum where mountain sports enthusiasts could exchange information about routes, climbing techniques, and personal experiences. However, with the rapid growth of mountaineering and trekking movements in Vietnam, Alpine Ascents Vietnam quickly expanded and developed, becoming a reputable and comprehensive online resource in this field.</p>
            <p>Throughout its development, Alpine Ascents Vietnam has continuously expanded its content and features to better meet the needs of users. The website now provides detailed information about famous mountain ranges like Fansipan, Ba Na, and other notable trekking areas, along with in-depth guides on gear preparation, mountain safety, and essential techniques. Notably, we also offer articles and video guides to help users easily grasp and apply the necessary knowledge before each trip.</p>
            <p>Alpine Ascents Vietnam is also connected with many international mountaineering organizations and communities, actively participating in environmental protection programs and promoting sustainable tourism. We collaborate with NGOs and conservation groups to protect precious mountain areas and raise awareness about the importance of preserving nature for future generations.</p>
            <p>With over a decade of operation, Alpine Ascents Vietnam is not only an information website but also a vibrant and close-knit community where people can share their passion and desire for exploration. We organize events, workshops, and community trips to connect mountain enthusiasts, providing opportunities for them to meet and learn from each other. Thanks to strong community support, the website has significantly contributed to promoting the mountaineering movement in Vietnam and inspiring new generations of adventure sports lovers.</p>
            <p>Alpine Ascents Vietnam is proud to be part of the rapidly growing mountaineering community and hopes to continue serving as an important bridge between mountain enthusiasts and the majestic beauty of Vietnam's nature in the coming years.</p>
        </div>
    `;

    let types_forms = `
        <div>
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
    `;

    let technique = `
        <div>
            <p>Mountain climbing is a popular outdoor sport that requires participants to have certain skills, physical strength, and experience. Climbing techniques have been developed to help climbers move safely, efficiently, and reduce risks in extreme conditions. Below are some basic climbing techniques:</p>

            <h4 style="font-style:italic; font-weight:bold;">Belaying Technique</h4>
            <p>This is the basic technique to ensure safety for climbers. When climbing, one person is responsible for holding the safety rope for the main climber, ensuring that in case of a slip or fall, the climber will be held securely. A belay device is used to adjust rope tension and absorb shock in case of an accident.</p>

            <h4 style="font-style:italic; font-weight:bold;">Free Climbing Technique</h4>
            <p>This technique involves climbing using only hands and feet, while ropes and other equipment are only used for protection in case of a fall. Climbers need flexibility, endurance, and good balance skills to move smoothly over rocks or difficult surfaces.</p>

            <h4 style="font-style:italic; font-weight:bold;">Aid Climbing Technique</h4>
            <p>Contrary to free climbing, this technique uses equipment like hooks, clamps, or ropes to assist climbers, especially when the surface is too difficult or lacks handholds and footholds.</p>

            <h4 style="font-style:italic; font-weight:bold;">Knot Tying Technique</h4>
            <p>Knot-tying skills are essential. Common knots like the figure-eight knot, double knot, or bowline knot help create tight and secure connections between ropes, climbers, and other support equipment.</p>

            <h4 style="font-style:italic; font-weight:bold;">Pacing and Breathing Technique</h4>
            <p>When climbing, maintaining steady breathing and controlling the pace is crucial. Moving too fast can lead to exhaustion, especially on long climbs. Stable breathing helps preserve strength and focus throughout the climb.</p>

            <h4 style="font-style:italic; font-weight:bold;">Footwork and Grip Technique</h4>
            <p>Proper foot placement and grip are essential for safety and efficiency. Climbers should learn to shift their body weight and use leg strength rather than relying solely on their hands. This helps conserve energy and improves balance.</p>

            <h4 style="font-style:italic; font-weight:bold;">Route Finding Technique</h4>
            <p>The ability to navigate and choose a safe route is an indispensable part of climbing. Before starting, participants should carefully observe the terrain, anticipate difficulties and risks, and choose the best path accordingly.</p>

            <h4 style="font-style:italic; font-weight:bold;">Gear Management Technique</h4>
            <p>Knowing how to use and maintain climbing gear such as carabiners, ropes, harnesses, and helmets is crucial. Climbers must thoroughly check their equipment before climbing to ensure it is functioning well, thereby minimizing risks.</p>

            <h4 style="font-style:italic; font-weight:bold;">Communication Technique</h4>
            <p>Clear communication between the climber and the belayer is vital in climbing. Sound signals and hand gestures are often used to convey important information like requesting more rope, stopping, or signaling an emergency.</p>

            <h4 style="font-style:italic; font-weight:bold;">Ice Climbing Technique</h4>
            <p>When climbing in winter or on icy surfaces, climbers need to use additional equipment like crampons, ice axes, and ice screws to grip and ascend slippery surfaces. This technique requires high concentration and skill due to harsh weather conditions and the risk of avalanches.</p>

            <p>Mountain climbing is a challenging sport that offers many physical and mental rewards. The techniques above help climbers overcome obstacles and conquer high peaks while ensuring safety for themselves and their teammates throughout the journey.</p>
        </div>
    `;

    let shelter = `
        <div>
            <p>During mountain climbing, finding or preparing shelters is crucial to ensure safety and provide rest for climbers. Shelters not only protect against harsh weather conditions such as rain, strong winds, or snow, but also help maintain health and morale during long journeys. Below are some common types of shelters that climbers often use.</p>

            <h4 style="font-style:italic; font-weight:bold;">Base Camp</h4>
            <p>This is a shelter set up at the base of the mountain or the starting point of a long climbing expedition. Base camps usually consist of large tents where groups of climbers can rest, prepare food, and gear before ascending to more dangerous altitudes. These areas typically have nearby water sources, safe camping spots, and may be located in regions with less extreme weather compared to higher elevations.</p>

            <h4 style="font-style:italic; font-weight:bold;">Tent</h4>
            <p>Tents are the most common portable shelter in mountain climbing. Modern tents are designed to be compact, lightweight, waterproof, and wind-resistant, suitable for harsh weather conditions on mountains. Tents can be set up at temporary resting spots when climbers need to take breaks during long journeys. Some tents are also equipped with excellent insulation and heating features for snowy regions.</p>

            <h4 style="font-style:italic; font-weight:bold;">Cave</h4>
            <p>In high-altitude areas with complex terrain, natural caves can become ideal shelters. Caves protect climbers from strong winds and rain; however, it’s important to thoroughly inspect the cave for safety before using it. Deep caves may offer more spacious accommodations than tents, but they are often colder and damper, so using sleeping bags or insulating pads is essential to keep warm.</p>

            <h4 style="font-style:italic; font-weight:bold;">Mountain Huts</h4>
            <p>In high-altitude areas, especially at popular climbing spots, local authorities or climbing organizations may build small wooden huts or shelters for climbers. These places provide enclosed rest areas, shelter from rain and wind, and may even have basic amenities like cooking stoves or sleeping bunks. Mountain huts are usually located at fixed rest stops, allowing climbers to rest and replenish their energy.</p>

            <h4 style="font-style:italic; font-weight:bold;">Shelter</h4>
            <p>On popular hiking and climbing trails, many countries have built small shelters for emergency use when sudden bad weather occurs. These shelters are not large and lack many amenities, but they are sufficient to protect climbers from the elements. Shelters are often scattered along long hiking routes, allowing climbers to rest without needing to pitch tents.</p>

            <h4 style="font-style:italic; font-weight:bold;">Igloo and Snow Shelter</h4>
            <p>In snowy mountain regions, snow shelters or igloos are a viable solution in emergencies. Climbers can build these shelters using snow-cutting tools to create thick walls that provide insulation and protection from cold winds. However, building igloos requires experience and skill, as the structure must be sturdy and safe.</p>

            <p>Mountain climbing is a challenging sport that offers numerous physical and mental rewards. These techniques help climbers overcome obstacles and conquer high peaks while ensuring safety for themselves and their teammates throughout the journey.</p>
        </div>
    `;

    let danger = `
        <div>
            <p>Mountain climbing is a challenging and risky activity that requires participants to have good health, specialized skills, and thorough preparation. However, regardless of experience, climbing always involves unpredictable dangers. One of the greatest risks in climbing is <span class="danger_bold">falling</span>. On slippery rocky slopes or at high altitudes, a slip can lead to serious accidents, even death. Safety harnesses and protective gear can help reduce this risk, but climbers still need to be cautious with every step.</p>

            <p>Additionally, another danger is <span class="danger_bold">landslides and rockfalls</span>. Rocky terrains are often unstable, especially after rain or bad weather. Rocks and soil can unexpectedly tumble down from above, posing a risk to climbers below. This is why monitoring the weather and terrain conditions is extremely important before starting a climb.</p>

            <p><span class="danger_bold">Severe weather</span> is also a hazardous factor in climbing. At high altitudes, weather can rapidly change from sunny to stormy, with strong winds or snowfall. Sudden changes in weather not only reduce visibility but also make the terrain more dangerous. Climbers need to be fully equipped with waterproof clothing, warm gear, and necessary equipment to handle adverse weather conditions.</p>

            <p>When climbing at high altitudes, <span class="danger_bold">altitude sickness</span> is a significant concern. At elevations above 2,500 meters above sea level, thin air and lack of oxygen can cause symptoms such as dizziness, nausea, shortness of breath, and fatigue. If not addressed promptly, altitude sickness can lead to cerebral edema or pulmonary edema, which can be fatal. Gradual acclimatization to altitude and slow ascent are crucial to minimize this risk.</p>

            <p>Another common issue is <span class="danger_bold">getting lost</span>. On the mountain, especially in areas with complex terrain and few recognizable landmarks, climbers can easily become disoriented. Dense fog or lack of navigation equipment can lead to loss of direction, causing climbers to spend more time finding their way and increasing the risk of encountering other dangers such as bad weather or lack of water and food.</p>

            <p><span class="danger_bold">Dehydration and malnutrition</span> are also risks when climbing. At high altitudes, climbers often face rapid dehydration due to temperature changes and high energy demands. Lack of water and nutrition not only deteriorates health but also affects morale and concentration, increasing the risk of accidents. Therefore, it is crucial to prepare sufficient water and appropriate food for the journey.</p>

            <p>Finally, <span class="danger_bold">equipment failure</span> can also lead to danger. Equipment such as climbing ropes, carabiners, or footwear, if not thoroughly checked before climbing or if they malfunction during the climb, can cause serious accidents. Thus, careful inspection and use of high-quality equipment are essential to ensure safety.</p>

            <p>Climbing not only demands physical strength but also requires participants to understand potential dangers and have a plan to address them. From weather and terrain risks to personal health, thorough preparation and adequate equipment are the best ways to minimize risks when conquering high peaks.</p>
        </div>
    `;

    let record = `
        <div>
             <p>Alpine Ascent VietNam, a prominent name in the mountain climbing community, has achieved significant milestones and accolades that highlight its excellence and dedication to the sport. Established with the mission of promoting climbing and mountaineering in Vietnam, the organization has earned recognition both nationally and internationally.</p>

            <p>One of the notable achievements of Alpine Ascent VietNam was winning the prestigious "Asian Mountain Climbing Excellence Award" in 2019. This award, presented at the Asian Climbing Summit held in Kathmandu, Nepal, recognized the organization's outstanding contribution to the development and promotion of mountain climbing in Asia. The award was a testament to Alpine Ascent's commitment to advancing climbing techniques and fostering a vibrant climbing community.</p>

            <p>In 2021, Alpine Ascent VietNam was honored with the "National Mountaineering Achievement Award" by the Vietnam Ministry of Culture, Sports, and Tourism. This accolade, received during the National Sports Awards ceremony in Hanoi, celebrated the organization's remarkable achievements in organizing successful expeditions, including the historic ascent of Mount Fansipan’s challenging routes. This climb was notable not only for its technical difficulty but also for setting a new record in Vietnamese climbing history.</p>

            <p>The organization's dedication to safety and skill development was further recognized in 2022 when it received the "International Safety and Excellence in Climbing Award" at the World Mountaineering Conference in Chamonix, France. This award acknowledged Alpine Ascent VietNam's rigorous training programs and its role in promoting safe climbing practices. The recognition highlighted the organization's role in setting a global standard for climbing safety.</p>

            <p>Alpine Ascent VietNam also received the "Vietnam Climbing Development Award" in 2023, presented at the Vietnam Adventure Sports Festival in Ho Chi Minh City. This award was given in recognition of the organization’s significant efforts in developing new climbing routes and expanding the sport's reach across the country. The award also underscored the organization’s role in nurturing young climbers and fostering talent through its various training programs.</p>

            <p>Additionally, the organization has been recognized for its environmental conservation efforts. In 2024, Alpine Ascent VietNam received the "Green Climbing Award" from the International Mountaineering Federation at their annual summit in Tokyo, Japan. This award honored the organization's commitment to sustainable climbing practices and its initiatives to preserve mountain environments while promoting the sport.</p>

            <p>These accolades reflect Alpine Ascent VietNam’s dedication to excellence in the field of mountaineering. The organization's achievements demonstrate its leadership in climbing safety, route development, and environmental stewardship, contributing significantly to the global climbing community and setting new standards for the sport in Vietnam.</p>
        </div>
    `;


    function resetColor() {
        document.getElementById('overview_history').style.backgroundColor = "#5c715e";
        document.getElementById('types_forms').style.backgroundColor = "#5c715e";
        document.getElementById('technique').style.backgroundColor = "#5c715e";
        document.getElementById('shelter').style.backgroundColor = "#5c715e";
        document.getElementById('danger').style.backgroundColor = "#5c715e";
        document.getElementById('record').style.backgroundColor = "#5c715e";
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('para').innerHTML = overview_history;
        document.getElementById('overview_history').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('overview_history').addEventListener('click', function() {
        resetColor();
        document.getElementById('para').innerHTML = overview_history;
        document.getElementById('overview_history').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('types_forms').addEventListener('click', function() {
        resetColor();
        document.getElementById('para').innerHTML = types_forms;
        document.getElementById('types_forms').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('technique').addEventListener('click', function() {
        resetColor();
        document.getElementById('para').innerHTML = technique;
        document.getElementById('technique').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('shelter').addEventListener('click', function() {
        resetColor();
        document.getElementById('para').innerHTML = shelter;
        document.getElementById('shelter').style.backgroundColor = "#ddeedf";
    });


    document.getElementById('danger').addEventListener('click', function() {
        resetColor();
        document.getElementById('para').innerHTML = danger;
        document.getElementById('danger').style.backgroundColor = "#ddeedf";
    });

    document.getElementById('record').addEventListener('click', function() {
        resetColor();
        document.getElementById('para').innerHTML = record;
        document.getElementById('record').style.backgroundColor = "#ddeedf";
    });
</script>

</html>
