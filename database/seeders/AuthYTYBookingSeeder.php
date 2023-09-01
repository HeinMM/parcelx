<?php

namespace Database\Seeders;

use App\Models\AuthYTYBooking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthYTYBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuthYTYBooking::factory(30)->create();
    }

}
