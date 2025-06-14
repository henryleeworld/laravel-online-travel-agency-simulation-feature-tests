<?php

namespace Database\Seeders\Performance;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(int $owners = 100, int $users = 100): void
    {
        User::factory($owners)->owner()->create();
        User::factory($users)->user()->create();
    }
}
