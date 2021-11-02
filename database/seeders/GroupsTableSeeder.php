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
        $g->name = 'Group 4';
        $g->description = 'Fourth group to be made';
        $g->profile_id = 2;
        $g->save();
    }
}
