<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'password' => Hash::make("admin"),
            'email' => 'admin@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Benja CM',
            'password' => Hash::make("admin1234"),
            'email' => 'benja@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Snayder CT',
            'password' => Hash::make("admin1234"),
            'email' => 'snayder@gmail.com',
        ]);
    }
}
