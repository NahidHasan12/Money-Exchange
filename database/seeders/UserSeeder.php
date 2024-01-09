<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'name' => 'Nahid Hasan',
            'email' => 'nahid@example.com',
            'is_admin' => 1,
            'image' => Str::random(5).'.jpg',
            'phone' => '01581-008881',
            'password' => Hash::make('12345678'),
            'show_password' => '12345678'
            ],
            [
            'name' => 'User',
            'email' => 'user@example.com',
            'is_admin' => 2,
            'image' => Str::random(5).'.jpg',
            'phone' => '01500-000001',
            'password' => Hash::make('87654321'),
            'show_password' => '87654321'
            ],
        ]);
    }
}
