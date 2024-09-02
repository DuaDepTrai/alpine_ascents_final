<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('branches')->insert([
            ['name' => 'Alpine Ascents USA', 'address' => '109 W. Mercer St., Seattle, WA 98119, USA', 'phone' => '+1 206-378-1927', 'positioning' => '47.6241,-122.3568'],
            ['name' => 'Alpine Ascents Canada', 'address' => '123 Mountain Road, Banff, Alberta T1L 1A9, Canada', 'phone' => '+1 403-762-1234', 'positioning' => '51.1784,-115.5708'],
            ['name' => 'Alpine Ascents Switzerland', 'address' => '12 Bahnhofstrasse, Zermatt, 3920, Switzerland', 'phone' => '+41 27 966 81 00', 'positioning' => '46.0207,7.7491'],
            ['name' => 'Alpine Ascents New Zealand', 'address' => '45 Alpine Avenue, Queenstown, 9300, New Zealand', 'phone' => '+64 3-441 1234', 'positioning' => '-45.0312,168.6626'],
            ['name' => 'Alpine Ascents Japan', 'address' => '5-2-1, Minami-Aoyama, Minato-ku, Tokyo 107-0062, Japan', 'phone' => '+81 3-5774-1234', 'positioning' => '35.6655,139.7128'],
            ['name' => 'Alpine Ascents Argentina', 'address' => '89 Av. San Martín, El Chaltén, Santa Cruz, 9301, Argentina', 'phone' => '+54 2902 49-1234', 'positioning' => '-49.3289,-72.8868'],
            ['name' => 'Alpine Ascents Nepal', 'address' => 'Thamel Marg, Kathmandu 44600, Nepal', 'phone' => '+977 1-4421234', 'positioning' => '27.7172,85.3240'],
            ['name' => 'Alpine Ascents Italy', 'address' => '50 Via Roma, Courmayeur, 11013, Italy', 'phone' => '+39 0165 1234', 'positioning' => '45.7915,6.9706'],
            ['name' => 'Alpine Ascents South Africa', 'address' => '78 Main Road, Cape Town, 8001, South Africa', 'phone' => '+27 21 123 4567', 'positioning' => '-33.9249,18.4241'],
            ['name' => 'Alpine Ascents Australia', 'address' => '32 Alpine Way, Thredbo, NSW 2625, Australia', 'phone' => '+61 2 6457 1234', 'positioning' => '-36.5051,148.3028'],
        ]);
    }
}
