<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=> 'admin@mail.com',
            'password'=>bcrypt('password'),
            'role_id' => 1,
        ]);
        User::create([
            'name'=>'Konselor',
            'email'=> 'konselor@mail.com',
            'password'=> bcrypt('password'),
            'role_id' => 2,
        ]);
        User::create([
            'name'=>'Konseli',
            'email'=> 'konseli@mail.com',
            'password'=> bcrypt('password'),
            'role_id' => 3,
        ]);
    }
}
