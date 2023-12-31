<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();

        for($i = 0 ; $i < 30 ; $i++){

            $title=substr(fake()->sentence(), 0 , 255);
        
            Post::create([
                'title' => $title ,
                'slug' => str()->slug($title) ,
                'content' => fake()->paragraph(),
            ]);
        }

        
    }
}
