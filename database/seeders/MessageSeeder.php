<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'author_id' => '3',
                'room_id' => '1',
                'message' => 'Bienvenidos a mi mundo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => '7',
                'room_id' => '1',
                'message' => 'Espero no morir pronto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => '4',
                'room_id' => '2',
                'message' => 'Al que no se quede en fuera de juego le baneo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => '5',
                'room_id' => '1',
                'message' => 'Rendidme pleitesía',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_id' => '8',
                'room_id' => '2',
                'message' => 'Pues a mi me gusta más el baloncesto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
