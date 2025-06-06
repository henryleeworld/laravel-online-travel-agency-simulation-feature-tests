<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
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
