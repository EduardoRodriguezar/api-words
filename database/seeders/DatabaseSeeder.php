<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Option;
use App\Models\Word;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            OptionsTableSeeder::class,
            PlayersTableSeeder::class,
            WordsTableSeeder::class,
        ]);
    }
}
