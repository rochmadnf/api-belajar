<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        collect([
            [
                'name' => 'Rochmad Nurul Fahmi',
                'email' => 'rochmadnf@gmail.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fulan',
                'email' => 'fulan@mail.com',
                'email_verified_at' => null,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])->each(fn ($user) => DB::table('users')->insert($user));
    }
}
