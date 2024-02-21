<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produtos>
 */
class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->word(),
            "preview" => $this->faker->text(120),
            "quantidade" => rand(0, 50),
            "image" => $this->faker->image(),
            "valor" => rand(0, 20),
            "estoque" => rand(0,1),
            "from_padarias" => rand(1,10),
            "date" => date("Y-m-d h:i:s")

        ];
    }
}
