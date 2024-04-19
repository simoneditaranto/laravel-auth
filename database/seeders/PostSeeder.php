<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo Faker
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for($i = 0; $i < 5; $i++) {

            $newPost = new Post();

            $newPost->name = $faker->word();
            $newPost->description = $faker->paragraph();
            $newPost->thumb = $faker->imageUrl(400, 200, 'animals', true);
            $newPost->technologies = $faker->words(4, true);
            $newPost->link_repo = $faker->url();

            $newPost->save();

        }

    }
}
