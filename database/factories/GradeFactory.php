<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mark' => $this->faker->randomFloat(1, 1, 10),
            'has_cheated' => $this->faker->boolean(),
            'feedback' => $this->faker->text()
        ];
    }
}
