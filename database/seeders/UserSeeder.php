<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'SuperAdmin',
                'email' => 'super_admin'.'@gmail.com',
                'role_id'=> 1,
                'password' => Hash::make('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin'.'@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fran',
                'email' => 'fran@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paula',
                'email' => 'paula@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Xuso',
                'email' => 'xuso@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], 
            [
                'name' => 'Javier',
                'email' => 'javier@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jose',
                'email' => 'jose@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana',
                'email' => 'ana@gmail.com',
                'password' => Hash::make('1234'),
                'role_id'=> 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],              
        ]);
    }
}
