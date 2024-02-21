<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->unique()->text(32),
            "email" => $this->faker->unique()->text(30),
            "senha" => $this->faker->text(9),
            "endereco" => $this->faker->text(12),
            "imagem" => $this->faker->image(),
            "date" => date("Y-m-d h:i:s")
        ];
    }
}
