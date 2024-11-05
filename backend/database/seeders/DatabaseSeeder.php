<?php

namespace Database\Seeders;
use Database\Seeders\CategorieSeeder;
use Database\Seeders\JewelrySeeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\ReviewSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorieSeeder::class,
            JewelrySeeder::class,
            CustomerSeeder::class,
            ReviewSeeder::class,
        ]);

    }
}
