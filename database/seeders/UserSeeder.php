<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'john',
            'email' => 'john@axample.com',
            'password' => Hash::make('secret'),
        ]);

        $user->roles()->attach([1,3]); // Assuming 'admin' role has ID 1, 3

        $user2 = User::create([
            'name' => 'Abdulloh',
            'email' => 'abdulloh@axample.com',
            'password' => Hash::make('secret'),
        ]);

        $user2->roles()->attach([2]);

        // User::factory(10)->create();
        // User::factory()->create([
        //     'email' => 'ustidan@yozilgan.email'
        // ]);
    }
}
