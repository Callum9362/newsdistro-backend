<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Source::factory(2)->create()->each(function ($source){
            \App\Models\Article::factory(100)->create(['source_id' => $source->id]);
        });
        $products = \App\Models\Product::factory(5)->create();
        $articles = \App\Models\Article::all();
        $articles->each(function ($article) {
            $article->orders()->attach(\App\Models\Order::factory(1)->create());
        });
    }
}
