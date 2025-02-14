<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => "Admin Tampan",
            'email' => "admin@gmail.com",
            'password' => Hash::make('adminsipm'),
            'role' => "Admin",
        ]);

        // $this->call([
        //     UserSeeder::class,
        // ]);

    }
}
