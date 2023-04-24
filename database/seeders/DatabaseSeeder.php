<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        (new \App\Models\Listing)->create([
            'title'=> 'The Heliosphere',
            'brand_name' => 'ChronoMaster',
            'location'=> 'Silicon Valley, California, USA',
            'phone'=> '+123123123',
            'description'=> 'The ChronoMaster Heliosphere is a luxurious automatic timepiece with a stainless steel case, sapphire crystal, and a mesmerizing sunburst dial.',
        ]);
        (new \App\Models\Listing)->create([
            'title'=> 'AeroGlide',
            'brand_name' => 'ChronoMaster',
            'location'=> 'Silicon Valley, California, USA',
            'phone'=> '+123123123',
            'description'=> 'The ChronoMaster AeroGlide is a sleek pilot watch with a black PVD-coated stainless steel case, luminescent hands, and a reliable Swiss quartz movement.',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
