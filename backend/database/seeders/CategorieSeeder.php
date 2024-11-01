<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::insert([
            [
                'name' => 'Bagues',
                'description' => 'Bijoux pour les doigts',
            ],
            [
                'name' => 'Colliers',
                'description' => 'Bijoux pour le cou',
            ],
            [
                'name' => 'Bracelets',
                'description' => 'Bijoux pour les poignets',
            ]
        ]);
    }
}
