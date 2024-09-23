<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ToursTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tours')->insert([
            [
                'name' => 'Fansipan Adventure Expedition',
                'price' => 3500000,
                'image' => 'images/fansipan/fansipan (1).jpg',
                'location' => '<p>Fansipan, located in Sa Pa district, Lào Cai province, is known as the "Roof of Indochina" and is the highest peak in the Hoang Lien Son range, standing at 3,143 meters above sea level.</p> <p>This location not only attracts adventure enthusiasts due to its grandeur but also because of its majestic natural beauty. Fansipan is a dream destination for many trekkers and travelers, offering a sense of triumph when standing on the highest peak of Indochina, immersing in the sea of white clouds, and admiring the vast surrounding landscapes.</p>',
                'features' => '<p>Fansipan features rugged limestone terrain with steep and uneven paths.</p> <p>Along the route to the summit, you will pass through dense forests, clear streams, and lush green meadows. The path to the top is often shrouded in mist, creating a mysterious and magnificent scene. Small caves and beautiful waterfalls along the route are also interesting highlights.</p> <p>The rainy season can make the road slippery and more challenging, but it is compensated by the beautiful natural scenery and fresh air.</p>',
                'besttime' => ' <p>The ideal time to conquer Fansipan is from October to April.</p> <p>During this period, the weather is dry and cool, with temperatures ranging from 10 to 20 degrees Celsius, making it ideal for trekking.</p> <p>Spring and autumn are the best times to enjoy the scenery, with fields of vibrant yellow wild sunflowers or the green hues of vegetation. Summer may bring heavy rains, affecting travel and sightseeing. Winter can be very cold, with possible ice and snow, making the conquest more difficult and requiring careful preparation.</p>',
                'directions' => '<p>Take a train or bus from Hanoi to Sa Pa, with travel time around 6-8 hours.</p> <p>From Sa Pa, rent a motorbike or take a taxi to reach the base of the mountain.</p>',
                'trekkingroutes' => '<p>Starting from the base of the mountain, the journey will lead you through winding trails across dense forests and beautiful valleys. Along the way, you will have the opportunity to admire magnificent landscapes and experience the drastic changes in climate and scenery from the base to the summit. On the first night, you will rest at camps or temporary lodges in the mountains to regain your strength.</p> <p>On the second day, you will continue to conquer steep paths and cloud forests to reach the summit of Fansipan, where you will be rewarded with a panoramic view of the majestic Hoang Lien Son range.</p>',
                'items' => '<p>Waterproof and non-slip trekking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Trekking poles</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p> <p>Warm clothing and woolen hat if trekking in winter</p>',
                'cautions' => '<p>Check the weather before departing to ensure favorable conditions.</p> <p>Follow the guides instructions and do not stray from the route.</p> <p>Carry protective gear to avoid injury and maintain the cleanliness of the surrounding environment.</p>',
                'requirements' => '<p>Good health, with the ability to walk long distances and hike mountains.</p> <p>No extensive trekking experience required, but participants should have basic mountain climbing experience.</p> <p>Suitable for individuals aged 18 and above.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Phong Nha - Ke Bang Discovery',
                'price' => 3000000,
                'image' => 'images/phong-nha-ke-bang/phong-nha-ke-bang (1).jpg',
                'location' => '<p>Phong Nha - Ke Bang, located in Quang Binh province, is a UNESCO World Heritage site known for its magnificent cave systems.</p> <p>This area is famous for large caves such as Son Doong, Phong Nha, and Tien Son, offering a unique and rich natural exploration experience.</p> <p>With rivers, waterfalls, and majestic landscapes, it is an ideal destination for those passionate about caves and exploring pristine nature.</p>',
                'features' => '<p>Phong Nha - Ke Bang features limestone terrain with a vast cave system.</p> <p>Son Doong, the worlds largest cave, stands out with its unique stalactites and stalagmites. Other caves like Phong Nha and Tien Son are equally impressive, with fascinating geological structures and stunning natural landscapes.</p> <p>The surrounding terrain mainly consists of limestone mountains and tropical forests, creating a majestic and mysterious natural setting.</p> <p>Each cave has its own unique beauty, from clear blue lakes to rich ecosystems.</p> ',
                'besttime' => '<p>The ideal time to explore Phong Nha - Ke Bang is from September to December.</p> <p>During this period, the weather is dry with little rain, making it suitable for cave visits and exploring the surrounding areas.</p> <p>Summer may bring heavy rains, affecting travel and sightseeing.</p> <p>Winter can be cold and damp, making cave exploration more challenging.</p>',
                'directions' => '<p>From Hanoi, you can take a train or fly to Dong Hoi.</p> <p>From Dong Hoi, continue by taxi or bus to Phong Nha - Ke Bang, which takes about 1-2 hours.</p> ',
                'trekkingroutes' => '<p>With a 4-day 3-night tour, the journey begins at the foot of the mountain, where a professional guide will lead you into the heart of Phong Nha Cave.</p> <p>With spacious pathways and fascinating limestone formations, you will have the opportunity to admire beautiful stalactites and the unique ecosystem within the cave. The cave tour typically lasts about 2-3 hours, depending on your pace and interest.</p> <p>After that, you will explore Son Doong Cave, where you will have to navigate narrow tunnels, swim through underground lakes, and conquer uncharted areas to enjoy the pristine beauty of nature.</p> ',
                'items' => '<p>Waterproof walking shoes</p> <p>Rainproof and windproof jacket</p> <p>Flashlight and spare batteries</p> <p>Snacks and water</p> <p>Sunscreen and mosquito repellent</p> <p>Protective gear such as hats and gloves</p>',
                'cautions' => '<p>Follow the guides instructions and avoid harming the environment.</p> <p>Protect sensitive areas and maintain silence to avoid disturbing the wildlife and surrounding ecosystems.</p>',
                'requirements' => '<p>Requires good health due to various activities like cave exploration and swimming.</p><p>No extensive experience required, but good physical preparation is essential.</p><p>Participants must be 15 years or older.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ta Xua Cloud Hunting Trek',
                'price' => 2500000,
                'image' => 'images/ta-xua/ta-xua (1).jpg',
                'location' => '<p>Ta Xua, located in Bac Yen district, Son La province, is famous for its majestic mountain ranges and sea of white clouds.</p> <p>This location is a paradise for those who love trekking and want to experience the natural beauty of Vietnam Northwest region.</p> <p>Ta Xua is also an ideal place to enjoy the pristine scenery and misty clouds, creating a mesmerizing natural landscape.</p>',
                'features' => '<p>Ta Xua stands at approximately 2,865 meters high and is characterized by rugged limestone terrain.</p> <p>The path to the summit is often covered in mist and early morning fog, creating a mysterious and majestic landscape. You will pass through forests, lush green fields, and steep trails.</p> <p>Notably, Ta Xua has narrow and challenging trails, requiring good physical fitness and trekking skills to overcome.</p> <p>Other highlights include lush green meadows and deep valleys.</p> ',
                'besttime' => '<p>The ideal time to explore Ta Xua is from October to April.</p> <p>During this period, the weather is dry and cool, perfect for trekking and viewing the sea of clouds.</p> <p>Summer can bring heavy rains, making travel difficult.</p> <p>Winter can be cold and damp, so thorough preparation is necessary for the trip.</p>',
                'directions' => '<p>From Hanoi, take a bus or train to Son La.</p> <p>From Son La, continue by taxi or motorbike to the Ta Xua area.</p>',
                'trekkingroutes' => '<p>Starting the journey from the foot of Ta Xua Mountain, you will trek through winding trails and lush green tea hills.</p> <p>We will guide you to ideal stops to admire the stunning scenery of clouds and mist. The first night will be spent at camps or guesthouses in the mountain area.</p> <p>On the second day, you will continue to conquer higher peaks and enjoy the breathtaking panorama of the Ta Xua mountain range.</p>',
                'items' => 'p>Waterproof and non-slip trekking shoes</p> <p>Windproof and rainproof jacket</p> <p>Snacks and water</p> <p>Trekking poles</p> <p>Sunscreen and mosquito repellent</p> <p>Flashlight and spare batteries</p> <p>Warm clothing and a wool hat</p> ',
                'cautions' => '<p>Prepare mentally and physically before starting the journey.</p> <p>Follow safety instructions and protect the surrounding environment.</p>',
                'requirements' => '<p>Good physical fitness is required due to the long and steep trekking route.</p> <p>Some trekking experience is necessary because of the challenging terrain.</p> <p>Participants should be 18 years or older and in good physical condition.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
