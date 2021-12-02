<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment;
        $c->contents = "test reply";
        $c->profile_id = 1;
        $c->post_id = 1;
        $c->save();

        $comments = Comment::factory()->count(50)->create();
    }
}
