<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
           
            [  'name' => 'Shorifa Akter', 'email' => 'shorifa@email.com',  'password' => Hash::make('Dhaka12') ],
            [  'name' => 'Shantona AKter', 'email' => 'shantona@email.com',  'password' => Hash::make('admin') ],
            [  'name' => 'Administration', 'email' => 'admin@email.com',  'password' => Hash::make('secret') ],
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
