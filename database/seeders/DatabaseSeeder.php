<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "Super Admin",
            "email" => "superadmin@email.com",
            "role" => 0,
        ]);

        User::factory()->create([
            "name" => "Admin",
            "email" => "admin@email.com",
            "role" => 1,
        ]);

        Product::factory(10)->create();
    }
}
