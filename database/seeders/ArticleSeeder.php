<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::query()->create([
            'title' => 'Работа с Laravel 9',
            'anons_title' => 'Laravel 9',
            'content' => 'В четверг мы начали учебную практику, а 13 числа начали изучать Laravel 9',
            'status' => 'published',
            'author_id' => rand(1 , 2),
            'category_id' => rand(1 , 5),
        ]);

        Article::query()->create([
            'title' => 'Работа с Laravel 10',
            'anons_title' => 'Laravel 10',
            'content' => 'В четверг мы начали учебную практику, а 13 числа начали изучать Laravel 10',
            'status' => 'blocked',
            'author_id' => rand(1 , 2),
            'category_id' => rand(1 , 5),
        ]);
    }
}
