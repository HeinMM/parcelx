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
        User::factory()->create([
            "name" => "Jason Hein",
            "email" => "j@gmail.com",
            "password" => Hash::make("asdffdsa"),
            'phone' => "09773346668",
            'role' => "admin"
        ]);
        User::factory(10)->create();
    }
}
