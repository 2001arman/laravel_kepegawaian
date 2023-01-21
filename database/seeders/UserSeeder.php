<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'email' => "jopan@gmail.com",
                "password" => Hash::make("jopan123"), 
                "name" => "jopan",
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        };
    }
}
