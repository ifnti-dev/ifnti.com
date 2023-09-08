<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dossier>
 */
class DossierFactory extends Factory
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
            'moyenne_bac' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 9, $max = 20),
            'moyenne_concours' => null,
            // "serie" => $this->faker->word(),
            'date_soumission' => $this->faker->date(),
            'etat' => $this->faker->randomElement(["rejeté", "en attente", "admis"]),
            "appreciation" => $this->faker->text(),
            "estentretenu" => $this->faker->boolean(),

        ];
    }
}
