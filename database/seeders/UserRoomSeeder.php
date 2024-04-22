<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'user_id' => 3,
                'room_id' => 1,
            ],
            [
                'user_id' => 4,
                'room_id' => 2,
            ],
            [
                'user_id' => 5,
                'room_id' => 3,
            ],
            [
                'user_id' => 4,
                'room_id' => 1,
            ],
            [
                'user_id' => 5,
                'room_id' => 1,
            ],
            [
                'user_id' => 6,
                'room_id' => 1,
            ],
            [
                'user_id' => 7,
                'room_id' => 1,
            ],
            [
                'user_id' => 8,
                'room_id' => 1,
            ],
            [
                'user_id' => 6,
                'room_id' => 2,
            ],
            [
                'user_id' => 7,
                'room_id' => 2,
            ],
            [
                'user_id' => 8,
                'room_id' => 2,
            ],
            [
                'user_id' => 6,
                'room_id' => 3,
            ],
            [
                'user_id' => 7,
                'room_id' => 3,
            ],
            [
                'user_id' => 8,
                'room_id' => 3,
            ],
        ]);
    }
}
