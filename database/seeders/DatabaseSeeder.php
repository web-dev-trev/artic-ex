<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
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
            'id' => 1,
            'title' => 'Event Title',
            'tag' => 'Paid',
            'img' => 'https://i.ibb.co/jRyPrtY/IM040034-033-int1.webp',
            ''
        ]);
    }
}
