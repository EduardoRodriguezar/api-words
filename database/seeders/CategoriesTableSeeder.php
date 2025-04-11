<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Astronomía']);
        Category::create(['name' => 'Física']);
        Category::create(['name' => 'Tecnología']);
        Category::create(['name' => 'Geografía']);
        Category::create(['name' => 'Historia']);
    }
}
