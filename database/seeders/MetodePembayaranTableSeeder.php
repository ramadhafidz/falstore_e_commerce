<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodePembayaranTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('metode_pembayaran')->insert([
            ['nama_metode_pembayaran' => 'Transfer Bank', 'created_at' => now(), 'updated_at' => now()],
            ['nama_metode_pembayaran' => 'E-Wallet', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}