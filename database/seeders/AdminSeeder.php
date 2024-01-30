<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
      public function run(): void {
       DB::table('users')->insert ([
            [  
       
        'name' => 'Elessa Fermano',
        'email' => 'elessafermano@gmail.com',
        'password' => Hash::make('fermano2024'),
        'remember_token' => NULL,
        'created_at' => now(),
        'updated_at' => now(),
         ],
          [  
            'name' => 'Rosemarie Faller',
            'email' => 'rosemariefaller@gmail.com',
            'password' => Hash::make('faller2024'),
            'remember_token' => NULL,
            'created_at' => now(),
            'updated_at' => now(),
          ] ,
        ]);
    }
}
