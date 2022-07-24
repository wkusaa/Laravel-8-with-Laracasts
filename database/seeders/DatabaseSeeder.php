<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
            'name' => 'Eric'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create([
            'name' => 'Bruh'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);
        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);


        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);


        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste distinctio nam facilis</p>',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus nostrum laborum sit, quo ad, amet deserunt ullam sapiente quia voluptas, vel illum rem eligendi dolores aspernatur quaerat consequatur ipsam quibusdam?</p>',

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste distinctio nam facilis</p>',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus nostrum laborum sit, quo ad, amet deserunt ullam sapiente quia voluptas, vel illum rem eligendi dolores aspernatur quaerat consequatur ipsam quibusdam?</p>',

        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste distinctio nam facilis</p>',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus nostrum laborum sit, quo ad, amet deserunt ullam sapiente quia voluptas, vel illum rem eligendi dolores aspernatur quaerat consequatur ipsam quibusdam?</p>',

        // ]);
    }
}
