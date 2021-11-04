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
        $this->call(ProfilesTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);

        \App\Models\Group::factory(5)
            ->has(\App\Models\Profile::factory()->count(5))
            ->create();
    }
}
