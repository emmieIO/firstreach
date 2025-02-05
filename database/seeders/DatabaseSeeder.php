<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            "name" => "Administrator",
            'uuid' => Str::uuid(),
            "email" => "admin@admin.com",
            "password" => "Password@123",
            "role" => "admin"
        ]);

        Category::factory(4)->create();
        Location::factory(3)->create();
        Shipment::factory(3)->create();
    }
}
