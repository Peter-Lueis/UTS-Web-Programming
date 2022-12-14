<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Publisher::factory(5)->create();
        \App\Models\Book::factory(10)->create();
        $this->call([
            CategorySeeder::class,
           ]);
        \App\Models\BookCategory::factory(5)->create();

    }
}
