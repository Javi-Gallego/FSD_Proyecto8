<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'author_id' => 4,
                'game_id' => 1,
                'name' => 'La habitación de Fran',
                'description' => 'Sala para hablar tranquilamente mientras Fran mata a todos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 5,
                'game_id' => 2,
                'name' => 'El rincon de Paula',
                'description' => 'Fútbol, fútbol y fútbol. Sólo para amantes del fútbol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => 6,
                'game_id' => 7,
                'name' => 'La torre de Xuso',
                'description' => 'Desde la cima os dominaré a todos. GTA V para pros',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
