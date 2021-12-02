<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Profile;
        $p->username = "admin";
        $p->password = "password";
        $p->email = "admin@admin.com";
        $p->save();

        $profiles = Profile::factory()->count(20)->create();
    }
}
