<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        City::create([
            'country_id' => 1,
            'name' => 'New York',
            'lat' => 40.712776,
            'long' => -74.005974,
        ]);

        City::create([
            'country_id' => 2,
            'name' => 'London',
            'lat' => 51.507351,
            'long' => -0.127758,
        ]);
    }
}
