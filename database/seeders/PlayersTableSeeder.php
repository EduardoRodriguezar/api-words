<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use Illuminate\Support\Facades\Hash;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'name' => 'Juan',
            'email' => 'juan@example.com',
            'password' => Hash::make('123456')
        ]);
    }
}
