<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'tours_id' => 1, // Fansipan
                'images' => json_encode([
                    '/images/fansipan/fansipan (1).jpg',
                    '/images/fansipan/fansipan (2).jpg',
                    '/images/fansipan/fansipan (3).jpg',
                    '/images/fansipan/fansipan (4).jpg',
                    '/images/fansipan/fansipan (5).jpg',
                    '/images/fansipan/fansipan (6).jpg',
                    '/images/fansipan/fansipan (7).jpg',
                    '/images/fansipan/fansipan (8).jpg',
                ]),
                'videos' => json_encode([
                    'https://www.youtube.com/watch?v=-AREhw2Ot3o',
                ]),
            ],
            [
                'tours_id' => 2, // Phong Nha - Kẻ Bàng
                'images' => json_encode([
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (1).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (2).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (3).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (4).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (5).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (6).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (7).jpg',
                    '/images/phong-nha-ke-bang/phong-nha-ke-bang (8).jpg',
                ]),
                'videos' => json_encode([
                    'https://www.youtube.com/watch?v=yOtqF9DRI-s',
                ]),
            ],
            [
                'tours_id' => 3, // Tà Xùa
                'images' => json_encode([
                    '/images/ta-xua/ta-xua (1).jpg',
                    '/images/ta-xua/ta-xua (2).jpg',
                    '/images/ta-xua/ta-xua (3).jpg',
                    '/images/ta-xua/ta-xua (4).jpg',
                    '/images/ta-xua/ta-xua (5).jpg',
                    '/images/ta-xua/ta-xua (6).jpg',
                    '/images/ta-xua/ta-xua (7).jpg',
                    '/images/ta-xua/ta-xua (8).jpg',
                ]),
                'videos' => json_encode([
                    'https://www.youtube.com/watch?v=hO_VjQXSjAQ',
                ]),
            ],
            // Add more tours with images and YouTube video links here...
        ]);
    }
}