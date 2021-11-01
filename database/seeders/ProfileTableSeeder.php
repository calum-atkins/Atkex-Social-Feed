<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Profile();
        $p->firstname = "James";
        $p->surname = "Jones";
        $p->save();

        $profiles = Profile::factory()->count(10)->create();
    }
}
