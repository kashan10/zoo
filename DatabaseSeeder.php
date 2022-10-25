<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
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
         \App\Models\User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Article::create(['title'  => 'Lorem libero donec',
        'description' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                            Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec id elit non mi porta gravida at eget metus.',
        'name' => 'John Smith',
        'job' => 'doctor'
        ]);
        Article::create(['title'  => 'Lorem libero donec',
        'description' => 'Nullam id dolor id nibh ultricies vehicula ut id elit.
                            Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                            Donec id elit non mi porta gravida at eget metus.',
        'name' => 'John Smith1',
        'job' => 'engineer'
        ]);
    }
}
