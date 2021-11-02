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
        $po = new Post;
        $po->post_info = 'This is my first ever post';
        $po->profile_id = 2; //James
        $po->group_id = 1; //group 4
        $po->save();
    }
}
