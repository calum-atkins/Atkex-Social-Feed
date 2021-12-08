<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post;
        $p->title = "post title";
        $p->contents = "contents of the post";
        $p->user_id = 1;
        $p->group_id = 1;
        $p->save();

        $posts = Post::factory()->count(40)->create();
    }
}
