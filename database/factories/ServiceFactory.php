<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,2),
            'service_type' => $this->faker->randomElement(['oil change', 'water service']),
            'status' => $this->faker->randomElement(['pending', 'ready', 'completed']),
            'service_date' => $this->faker->date,
            'vehicle_name' => $this->faker->word,
        ];
    }
}
