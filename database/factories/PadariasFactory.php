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
            "descricao" => $this->faker->text(200),
            "endereco" => $this->faker->unique()->text(30),
            "telefone" => $this->faker->unique()->text(9),
            "imagem" => $this->faker->image(),
            "from_cidades" => rand(1,10),
            "date" => date("Y-m-d h:i:s")
        ];
    }
}
