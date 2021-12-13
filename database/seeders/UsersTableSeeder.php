<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();
        $u->name = "calum.a";
        $u->email = "calum1atkins@gmail.com";
        $u->password = "password";
        $u->save();

        $users = User::factory()->count(20)->create();
    }
}
