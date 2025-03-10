<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            'email' => 'user@gmail.com',
            'password' => Hash::make('userganteng123'),
            'level' => 1, 
        ]);
    }
}
