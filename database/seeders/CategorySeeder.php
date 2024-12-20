<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-desgin',
            'color'=> 'red'
        ]);

        Category::create([
            'name'=> 'UI UX Design',
            'slug'=> 'UI-UX-desgin',
            'color'=> 'blue'
        ]);

        Category::create([
            'name'=> 'IOT',
            'slug'=> 'iot',
            'color'=> 'green'
        ]);

        Category::create([
            'name'=> 'Data Structure',
            'slug'=> 'data-structure',
            'color'=> 'yellow'
        ]);
    }
}
