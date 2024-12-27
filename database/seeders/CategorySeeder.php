<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Dresses', 'slug' => 'dresses', 'description' => 'Pretty dresses for elegant dressings'],
            ['name' => 'Shorts', 'slug' => 'shorts', 'description' => 'Shorts for the day'],
            ['name' => 'Sweatshirts', 'slug' => 'sweatshirts', 'description' => 'Sweatshirts dedicated to both genders'],
            ['name' => 'Jackets', 'slug' => 'jackets', 'description' => 'Jackets for style or variety of purposes'],
            ['name' => 'T-shirt & Tops', 'slug' => 't-shirt-n-tops', 'description' => 'From minimalist to extended style'],
            ['name' => 'Jeans', 'slug' => 'jeans', 'description' => 'Jeans for the day'],
            ['name' => 'Trousers', 'slug' => 'trousers', 'description' => 'Perfect for style or comfort'],
            ['name' => 'Men', 'slug' => 'men', 'description' => 'Men’s gears of style'],
            ['name' => 'Jumpers & Cardigans', 'slug' => 'jumpers-cardigans', 'description' => 'All kinds of jumpers and cardigans'], // Slug diperbaiki
            ['name' => 'Longsleeve', 'slug' => 'longsleeve', 'description' => 'Longsleeve for style or comfort'],
            ['name' => 'Hoodies', 'slug' => 'hoodies', 'description' => 'Hoodies for the day, night, or evening'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'description' => $category['description'],
                'slug' => $category['slug'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            logger()->info('Inserted category:', $category);
        }
    }
}
