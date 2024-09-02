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
                'password' => Hash::make('123456'), // Mã hóa mật khẩu
                'role' => true, // true cho admin, false cho user thông thường
                'created_at' => now()
            ],
            // Thêm các người dùng khác nếu cần
        ]);
    }
}
