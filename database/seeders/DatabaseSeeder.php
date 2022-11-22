<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\Post;
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

        Event::create([
            'title' => 'Event Title',
            'description' => 'Event description',
            'datetime' => '2022-11-21T09:23:44+00:00',
            'type' => 'Talk',
            'tag' => 'Paid',
            'img' => 'https://i.ibb.co/jRyPrtY/IM040034-033-int1.webp',
            'content' => 'A random string of content for example purposes'
        ]);

        Post::create([
            'type' => 'article',
            'title' => 'Article Title',
            'description' => 'An article',
            'datetime' => '2022-11-21T09:23:44+00:00',
            'category' => 'Education',
            'tag' => 'Tips & Tricks',
            'img' => 'https://i.ibb.co/jRyPrtY/IM040034-033-int1.webp',
            'content' => 'A random string of content for example purposes'
        ]);
    }
}
