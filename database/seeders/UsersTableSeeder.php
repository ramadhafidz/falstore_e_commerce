<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@falstore.com',
                'password' => Hash::make('admin123'), // Hash pw biar aman
                'phone_number' => '+6281234567890',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'User',
                'username' => 'user',
                'email' => 'user@falstore.com',
                'password' => Hash::make('user123'),
                'phone_number' => '+628987654321',
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}