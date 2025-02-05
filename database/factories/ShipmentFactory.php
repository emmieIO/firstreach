<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid,
            'tracking_number' => "FRL-".Str::random(8),
            'sender_name' => $this->faker->name,
            'sender_address' => $this->faker->address,
            'sender_phone' => $this->faker->phoneNumber,
            'sender_email' => $this->faker->email,
            'receiver_name' => $this->faker->name,
            'receiver_address' => $this->faker->address,
            'receiver_phone' => $this->faker->phoneNumber,
            'receiver_email' => $this->faker->email,
            'destination_id' => \App\Models\Location::factory(),
            'origin_id' => \App\Models\Location::factory(),
            'category_id' => \App\Models\Category::factory(),
            'status' => $this->faker->randomElement(['pending', 'delivered', 'cancelled', "in-transit", "on-hold"]),
            'amount' => $this->faker->randomNumber,
            'created_by'=> \App\Models\User::factory()->create([
                "role"=>"admin"
            ]),
            'shipment_date' => $this->faker->dateTime,
            'expected_delivery_date' => $this->faker->dateTime,
            'description' => $this->faker->text,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
