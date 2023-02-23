<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ratria Seza',
            'email' => 'email@email.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Judi Tew',
            'email' => 'judi@tew.com',
            'password' => bcrypt('123')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Post Pertama',
            'slug' => 'post-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis itaque repudiandae, unde est perferendis quia explicabo voluptatum tempora nulla inventore',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis itaque repudiandae, unde est perferendis quia explicabo voluptatum tempora nulla inventore vitae nam illo, debitis quisquam veritatis quidem ab quam? Omnis libero deserunt, mollitia vel qui quod dolorem. Rerum minima eum nesciunt delectus ex laboriosam voluptas cum iusto laborum non quasi, quod architecto maiores est odit facilis odio consequatur tempore accusantium? Iusto quos odio dolor asperiores! Quas soluta magni asperiores ut, possimus ipsum doloremque. Nostrum et eius minus, excepturi cupiditate, nam quas esse ipsam, ullam saepe enim. Error, repudiandae odit et, modi esse quisquam numquam nobis porro minima cum in!',
            'category_id' => 1,
            'user_id' => 1 
        ]);

        Post::create([
            'title' => 'Post Kedua',
            'slug' => 'post-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis itaque repudiandae, unde est perferendis quia explicabo voluptatum tempora nulla inventore',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis itaque repudiandae, unde est perferendis quia explicabo voluptatum tempora nulla inventore vitae nam illo, debitis quisquam veritatis quidem ab quam? Omnis libero deserunt, mollitia vel qui quod dolorem. Rerum minima eum nesciunt delectus ex laboriosam voluptas cum iusto laborum non quasi, quod architecto maiores est odit facilis odio consequatur tempore accusantium? Iusto quos odio dolor asperiores! Quas soluta magni asperiores ut, possimus ipsum doloremque. Nostrum et eius minus, excepturi cupiditate, nam quas esse ipsam, ullam saepe enim. Error, repudiandae odit et, modi esse quisquam numquam nobis porro minima cum in!',
            'category_id' => 1,
            'user_id' => 2 
        ]);

        Post::create([
            'title' => 'Post Ketiga',
            'slug' => 'post-ketiga',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis itaque repudiandae, unde est perferendis quia explicabo voluptatum tempora nulla inventore',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos facilis itaque repudiandae, unde est perferendis quia explicabo voluptatum tempora nulla inventore vitae nam illo, debitis quisquam veritatis quidem ab quam? Omnis libero deserunt, mollitia vel qui quod dolorem. Rerum minima eum nesciunt delectus ex laboriosam voluptas cum iusto laborum non quasi, quod architecto maiores est odit facilis odio consequatur tempore accusantium? Iusto quos odio dolor asperiores! Quas soluta magni asperiores ut, possimus ipsum doloremque. Nostrum et eius minus, excepturi cupiditate, nam quas esse ipsam, ullam saepe enim. Error, repudiandae odit et, modi esse quisquam numquam nobis porro minima cum in!',
            'category_id' => 2,
            'user_id' => 1 
        ]);
    }
}
