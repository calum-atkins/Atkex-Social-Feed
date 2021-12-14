<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        // \App\Models\Group::factory(5)
        //     ->has(\App\Models\Post::factory()->count(5))
        //     ->has(\App\Models\Comment::factory()->count(10))
        //     ->create();
    }
}
