<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthYTYBooking>
 */
class AuthYTYBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 0;

        if ($index >= 30) {
            $index = 0;
        }
        $index++;
        return [
            "user_id"=> rand(1,3),
            "booking_number" => Str::random(8),
            // "qr_code" => $index,

            "parcel_name" => fake()->company(),
            "cod" => 15000,

            "sender_name" => fake()->name(),
            "sender_phone" => "0911111111",
            "sender_city" => fake()->city(),
            "sender_township_id" => rand(1,3),
            "sender_address_detail" => fake()->address(),

            "receiver_name" => fake()->name(),
            "receiver_phone" => "09222222222",
            "receiver_city" => fake()->city(),
            "receiver_township_id" => rand(1,3),
            "receiver_address_detail" => fake()->address(),

            "weight" => rand(1,35),
            "count" => 1,
            "fees" => 10000,

            "delivery_man_id" => rand(1,4),
            "status_id" => rand(1,5),

            "assign_at" => now(),
            "road_at" => now(),
            "qrcode_at" => now(),
            "complete_at" => now()
        ];
    }
}
