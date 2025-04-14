<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionsTableSeeder extends Seeder
{
    public function run()
    {
        Option::create(['name' => 'Fácil']);
        Option::create(['name' => 'Medio']);
        Option::create(['name' => 'Difícil']);
        Option::create(['name' => 'Sin pistas']);
        Option::create(['name' => 'Con pistas']);
    }
}
