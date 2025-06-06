<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'superadmin@booking.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role_id' => 1, // Administrator
        ]);
    }
}
