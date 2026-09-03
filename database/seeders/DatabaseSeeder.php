<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminUserSeeder::class,
            PermissionSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            GeoobjectSeeder::class,
            FacilityCategorySeeder::class,
            FacilitySeeder::class,
        ]);
    }
}
