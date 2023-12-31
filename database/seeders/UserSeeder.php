<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
              
            ['name' => 'Tony Stark' , 'email' => 'ironman@gmail.com' , 'password' => Hash::make('marvel')],
            ['name' => 'Steve Stark' , 'email' => 'steve@gmail.com' , 'password' => Hash::make('marvel')],
            ['name' => 'Peter Stark' , 'email' => 'peter@gmail.com' , 'password' => Hash::make('marvel')],
            
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
