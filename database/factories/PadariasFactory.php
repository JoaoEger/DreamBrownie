<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Padarias>
 */
class PadariasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->unique()->text(40),
            "endereco" => $this->faker->unique()->text(30),
            "telefone" => $this->faker->unique()->text(9),
            "date"
        ];
    }
}
