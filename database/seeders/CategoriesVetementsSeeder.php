<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesVetementsSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'nom' => 'Pantalons',
                'slug' => 'pantalons',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'T-shirts',
                'slug' => 't-shirts',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Chemises',
                'slug' => 'chemises',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Chaussures',
                'slug' => 'chaussures',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Espadrilles',
                'slug' => 'espadrilles',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}
