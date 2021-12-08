<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new User;
        $p->username = "admin";
        $p->password = "password";
        $p->email = "admin@admin.com";
        $p->save();

        $users = User::factory()->count(20)->create();
    }
}
