<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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
        $u->password = Hash::make("password");
        $u->save();

        $users = User::factory()->count(10)->create();
    }
}
