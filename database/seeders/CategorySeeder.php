<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Dresses',
            'description' => 'Pretty Dressers for elegant dressings',
        ]);

        Category::create([
            'name' => 'Shorts',
            'description' => 'Shorts for the day',
        ]);

        Category::create([
            'name' => 'Sweatshirts',
            'description' => 'Sweatshirts dedicated to both genders',
        ]);

        Category::create([
            'name' => 'Jackets',
            'description' => 'Jacket for style or variety of purposes',
        ]);

        Category::create([
            'name' => 'T-shirt & Tops',
            'description' => 'From minimalist to extended style',
        ]);

        Category::create([
            'name' => 'Jeans',
            'description' => 'Jeans for the day',
        ]);

        Category::create([
            'name' => 'Trousers',
            'description' => 'Perfect for style or comfort',
        ]);

        Category::create([
            'name' => 'Men',
            'description' => 'Men’s gears of style',
        ]);

        Category::create([
            'name' => 'Jumpers & Cardigans',
            'description' => 'All kind of jumpers and Cardigans',
        ]);

        Category::create([
            'name' => 'Longsleeve',
            'description' => 'Longsleeve for style or comfort',
        ]);

        Category::create([
            'name' => 'Hoodies',
            'description' => 'Hoodies on the day or night or evening',
        ]);
    }
}