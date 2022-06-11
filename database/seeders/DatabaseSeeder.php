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
            \App\Models\Article::factory(10)->create(['source_id' => $source->id]);
        });
        
    }
}
