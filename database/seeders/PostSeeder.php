<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::statement('PRAGMA FOREIGN_KEY_CHECKS=0');
        Post::truncate();
        DB::statement('PRAGMA FOREIGN_KEY_CHECKS=1');

        
        

        for ($i=0; $i <20; $i++){

            $c = Category::inRandomOrder()->first();

            $title = Str::random(20);
            // $title = Str()->random(20);

            Post::create(
                [
                    'title' => "$title",
                    // 'slug' => str($title)->slug(),
                    'slug' => Str::slug($title),
                    'content' => '<p>Esto es un texto de prueba generado por mi aburrimiento total mientras veo el curso de Laravel.</p>',
                    'description' => '<p>Esto es la descripcion del post realizada por la profunda emoción de estar más perdido de lo que creo.</p>',
                    'posted' => 'yes',
                    'category_id' => $c->id,

                ]
            );
        }
    }
}
