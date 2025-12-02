<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admintest',
            'password' => Hash::make('admintest'),
            'is_admin' => true,
        ]);


        User::create([
            'name' => 'User',
            'email' => 'usertest',
            'password' => Hash::make('usertest'),
            'is_admin' => false,
        ]);

        // Seed conferences
        $this->call(ConferenceSeeder::class);
    }
}
