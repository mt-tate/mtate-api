<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WeightHistory>
 */
class WeightHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'day' => $this->faker->date()
            'day' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'weight' => $this->faker->randomNumber(3),
            'calorie_intake' => $this->faker->randomNumber(3),
            'calorie_burned' => $this->faker->randomNumber(3),
            'memo' => $this->faker->name(),
            'updated_by' => $this->faker->name()
        ];
    }
}
