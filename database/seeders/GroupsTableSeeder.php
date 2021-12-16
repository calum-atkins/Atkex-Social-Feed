<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new Group;
        $g->name = 'Trading';
        $g->description = 'Stock markets discussion';
        $g->user_id = 1;
        $g->save();

        $groups = Group::factory()->count(10)->create();
    }
}
