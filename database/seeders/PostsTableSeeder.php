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
        $p->title = "Post title";
        $p->contents = "Contents of the post";
        $p->img = "../assets/atkex_trans.jpeg";
        $p->user_id = 1;
        $p->group_id = 1;
        $p->save();

        $posts = Post::factory()->count(30)->create();
    }
}
