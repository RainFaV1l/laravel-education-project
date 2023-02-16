<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->create(['name' => 'Nature']);
        Category::query()->create(['name' => 'Development']);
        Category::query()->create(['name' => 'News']);
        Category::query()->create(['name' => 'IT']);
        Category::query()->create(['name' => 'Study']);
    }
}
