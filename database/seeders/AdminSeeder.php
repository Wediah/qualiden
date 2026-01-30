<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Change this password!
            'role' => 'admin',
            'email_verified_at' => now(),
            'email_verified' => true,
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->warn('Default credentials: admin@example.com / password');
        $this->command->warn('Please change the password after first login!');
    }
}
