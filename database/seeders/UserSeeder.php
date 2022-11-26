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
                'name' => "Rochmad Tamvan",
                'email' => "rochmad@example.com",
                'password' => bcrypt('password'),
            ],
            [
                'name' => "Fulan",
                'email' => "fulan@example.com",
                'password' => bcrypt('password'),
            ],
        ])->each(function ($u) {
            $user = User::create($u);
            $user->assignRole('admin');
        });
    }
}
