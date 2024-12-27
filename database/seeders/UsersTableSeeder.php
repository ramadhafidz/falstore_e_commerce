<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Admin', 'email' => 'admin@falstore.com', 'password' => 'admin123', 'role' => 'admin',],
            ['name' => 'User', 'email' => 'user@falstore.com', 'password' => 'user123', 'role' => 'user',],
            ['name' => 'Hafidz', 'email' => 'hrghiffari@gmail.com', 'password' => 'admin123', 'role' => 'user',],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']), // pw di hash biar aman
                'role' => $user['role'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}