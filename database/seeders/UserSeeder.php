<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => "Rochmad Nurul Fahmi",
                'email' => "rochmadnf@gmail.com",
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Fulan",
                'email' => "fulan@example.com",
                'password' => bcrypt('password'),
            ],
        ])->each(fn ($u) => User::create($u));
    }
}
