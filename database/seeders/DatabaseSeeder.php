<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(15)->create();
        Tag::factory(15)->create();
        Event::factory(45)->create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('events_tags')->insert([
                'event_id' => Event::inRandomOrder()->first()->id,
                'tag_id' => Tag::inRandomOrder()->first()->id
            ]);
        }
    }
}
