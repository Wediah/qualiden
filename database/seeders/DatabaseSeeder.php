<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create the single admin user
        User::factory()->create([
            'name' => 'Dennis Nsoh',
            'email' => 'dennisnsoh@qualidengroup.com',
            'password' => bcrypt('password'),
        ]);
    }
}
