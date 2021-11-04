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
        $p = new Group;
        $p->name = 'group 55';
        $p->description = 'this is group 55';
        $p->profile_id = 1;
        $p->save();

        $p->profiles()->attach(1);

        $groups = Group::factory()->count(5)->create();
    }
}
