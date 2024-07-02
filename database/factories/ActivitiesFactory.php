<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activities;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activities>
 */
class ActivitiesFactory extends Factory
{
    protected $model = Activities::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => City::factory(),
            'name' => $this->faker->company(), // Use company name for activity names
            'type' => $this->faker->randomElement(['Restaurant', 'Museum', 'Park', 'Theater']), // Example types
            'address' => $this->faker->address(),
            'working_time' => $this->faker->time($format = 'H:i:s', $max = 'now'), // Correct format for time
        ];
    }
}
