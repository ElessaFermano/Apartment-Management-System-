<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role'=> 'admin',
                'name' => 'Elessa Fermano',
                'email' => 'fermanoe@gmail.com',
                'password' => Hash::make('elessa2024'),
                'remember_token' => null, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role'=> 'admin',
                'name' => 'Rosemarie Faller',
                'email' => 'rosiefaller@gmail.com',
                'password' => Hash::make('faller2024'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
