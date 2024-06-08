<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryMan>
 */
class DeliveryManFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "email"=> fake()->email(),
            "name"=> fake()->name(),
            "phone" =>  fake()->phoneNumber(),

            "password" => "asdffdsa",
            'remember_token' => Str::random(10)
        ];
    }
}
