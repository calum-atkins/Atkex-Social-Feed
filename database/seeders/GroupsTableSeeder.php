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
        $g->name = 'group 55';
        $g->description = 'this is group 55';
        $g->user_id = 1;
        $g->save();

        //$g->users()->attach(1);

        $groups = Group::factory()->count(5)->create();
    }
}
