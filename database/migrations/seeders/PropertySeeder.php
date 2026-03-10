<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'title' => 'Luxury Apartment',
                'description' => 'Beautiful 3BHK apartment with sea view.',
                'price' => 7500000,
                'location' => 'Mumbai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Modern Villa',
                'description' => 'Spacious villa with private garden.',
                'price' => 15000000,
                'location' => 'Pune',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Budget Flat',
                'description' => 'Affordable 1BHK for small family.',
                'price' => 2500000,
                'location' => 'Kolhapur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
