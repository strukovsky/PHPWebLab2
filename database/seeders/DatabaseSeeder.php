<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\TagArticle;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         Article::factory(10)->create();
         Tag::factory(10)->create();
         TagArticle::factory(10)->create();
    }
}
