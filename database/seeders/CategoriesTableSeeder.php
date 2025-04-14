<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
        public function run()
    {
        Category::create(['name' => 'Animales']);
        Category::create(['name' => 'Frutas']);
        Category::create(['name' => 'Países']);
        Category::create(['name' => 'Profesiones']);
        Category::create(['name' => 'Objetos del hogar']);
    }

}

