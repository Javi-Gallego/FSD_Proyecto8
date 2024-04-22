<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'Counter Strike Global Offensive',
                'description' => '1st person shooter game',
                'url_image' => 'http//localhost:8000/img/01.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fifa 97',
                'description' => 'Football game',
                'url_image' => 'http//localhost:8000/img/02.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Red Dead Redemption II',
                'description' => 'Western game',
                'url_image' => 'http//localhost:8000/img/03.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Zelda Breath of the Wild',
                'description' => 'RPG game',
                'url_image' => 'http//localhost:8000/img/04.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Super Mario 64',
                'description' => 'Platform game',
                'url_image' => 'http//localhost:8000/img/05.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Last of Us',
                'description' => 'Survival game',
                'url_image' => 'http//localhost:8000/img/06.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'GTA V',
                'description' => 'Open world game',
                'url_image' => 'http//localhost:8000/img/07.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Minecraft',
                'description' => 'Sandbox game',
                'url_image' => 'http//localhost:8000/img/08.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Among Us',
                'description' => 'Social game',
                'url_image' => 'http//localhost:8000/img/09.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'League of Legends',
                'description' => 'MOBA game',
                'url_image' => 'http//localhost:8000/img/10.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
