<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'phone' => '0987654321',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'), // Hash the password
                'role' => true, // true for admin, false for regular user
                'created_at' => now()
            ],
            [
                'name' => 'Nguyễn Văn Hiếu',
                'phone' => '0123456789',
                'email' => 'hieu1@gmail.com',
                'password' => Hash::make('123456'), // Hash the password
                'role' => false, // true for admin, false for regular user
                'created_at' => now()
            ],
            // Add more users if needed
        ]);
    }
}
