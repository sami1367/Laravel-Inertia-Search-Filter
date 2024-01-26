<?php

// NannyBookingFactory.php
namespace Database\Factories;

use App\Models\NannyBooking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NannyBookingFactory extends Factory
{
    protected $model = NannyBooking::class;

    public function definition()
    {
        $categories = ['Date Night', 'Weekend Care', 'Special Event', 'Recurring Care', 'Emergency Care'];
        $randomCategory = $this->faker->randomElement($categories);

        $startTime = $this->faker->dateTimeBetween('now', '+2 months'); // Start time in the future
        $endTime = $this->faker->dateTimeBetween($startTime, $startTime->format('Y-m-d H:i:s').' +2 days'); // End time after start but less than two days

        $users = User::all(); // Get all existing users
        $randomUser = $users->random(); // Randomly select one user

        return [
            'user_id' => $randomUser->id, // Use the randomly selected user's id
            'title' => $randomCategory, // Randomly select one of the predefined titles
            'price' => $this->faker->randomFloat(2, 10, 100),
            'start_date_time' => $startTime,
            'end_date_time' => $endTime,
        ];
    }
}
