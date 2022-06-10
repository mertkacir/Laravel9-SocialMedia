<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'profile_picture' => "http://gravatar.com/avatar/" . md5(strtolower(trim($faker->email))) . "?d=monsterid",

            ]);
        }
        for ($i=0; $i < 100; $i++) {
            Post::create([
                'title' => $faker->title,
                'body' => $faker->realText(120),
                'image' => $faker->image('public/storage/images',640,480, null, false),
                'user_id' => $faker->numberBetween(1, 100),
            ]);
        }
        /*for ($i=0; $i < 30; $i++) {
            Category::create([
                'name' => $faker->name,
                'user_id' => $faker->numberBetween(1, 100)
            ]);
        }
        */
        /*for ($i=0; $i < 50; $i++) {
            Comment::create([
                'user_id' => $faker->numberBetween(1, 100),
                'parent_id' => $faker->numberBetween(1, 300),
                'body' => $faker->realText(120),

            ]);
        }
        */
        /*for ($i=0; $i < 500; $i++) {
            App\Like::create([
                'like' => $faker->boolean($chanceOfGettingTrue = 50),
                'user_id' => $faker->numberBetween(1, 100),
                'post_id' => $faker->numberBetween(1, 300)
            ]);
        }
        */
    }
    }

