<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Dresses', 'description' => 'Pretty dresses for elegant dressings'],
            ['name' => 'Shorts', 'description' => 'Shorts for the day'],
            ['name' => 'Sweatshirts', 'description' => 'Sweatshirts dedicated to both genders'],
            ['name' => 'Jackets', 'description' => 'Jackets for style or variety of purposes'],
            ['name' => 'T-shirt & Tops', 'description' => 'From minimalist to extended style'],
            ['name' => 'Jeans', 'description' => 'Jeans for the day'],
            ['name' => 'Trousers', 'description' => 'Perfect for style or comfort'],
            ['name' => 'Men', 'description' => 'Men’s gears of style'],
            ['name' => 'Jumpers & Cardigans', 'description' => 'All kinds of jumpers and cardigans'],
            ['name' => 'Longsleeve', 'description' => 'Longsleeve for style or comfort'],
            ['name' => 'Hoodies', 'description' => 'Hoodies for the day, night, or evening'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            logger()->info('Inserted category:', $category);
        }
    }
}