<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\BookingGuest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingGuest>
 */
class BookingGuestFactory extends Factory
{
    protected $model = BookingGuest::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'birth_date' => fake()->date(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
