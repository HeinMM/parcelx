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
            "name" => "MYANMAR ADMIN",
            "email" => "121MyanmarAdmin@gmail.com",
            "password" => Hash::make("121myanmaradmin@"),
            'phone' => "09773346668",
            'role' => "admin"
        ]);
        User::factory()->create([
            "name" => "USA ADMIN",
            "email" => "121UsaAdmin@gmail.com",
            "password" => Hash::make("121usaadmin@"),
            'phone' => "+1 6264265494",
            'role' => "usa-admin"
        ]);
        User::factory()->create([
            "name" => "USA Delivery",
            "email" => "121UsaDelivery@gmail.com",
            "password" => Hash::make("121usadelivery@"),
            'phone' => "+1 62642654944",
            'role' => "usa-delivery"
        ]);
        User::factory()->create([
            "name" => "USA ADMIN",
            "email" => "121MmDelivery@gmail.com",
            "password" => Hash::make("121mmdelivery@"),
            'phone' => "+1 6264265495",
            'role' => "mm-delivery"
        ]);

        User::factory()->create([
            "name" => "Normal User",
            "email" => "normalUser@gmail.com",
            "password" => Hash::make("121normaluser@"),
            'phone' => "0977334668",
            'role' => "user"
        ]);

    }
}
