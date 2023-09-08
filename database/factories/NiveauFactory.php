<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Niveau>
 */
class NiveauFactory extends Factory
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
            'systeme' => $this->faker->randomElement(["trim", "sem"]),
            "annee" => $this->faker->date(),
            "serie" => $this->faker->randomElement(["CD", "C4","D","E","F","A4"]),
            "etablissement" => $this->faker->company(),
        ];
    }
}
