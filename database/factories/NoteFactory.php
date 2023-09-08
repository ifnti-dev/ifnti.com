<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'math' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
            'ang' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
            'fr' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20),
        ];
    }
}
