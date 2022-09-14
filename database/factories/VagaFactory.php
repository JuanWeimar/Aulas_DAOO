<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidato>
 */
class VagaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome_vaga' => $this->faker->word(),
            'descricao' => $this->faker->paragraph(4),
            'area_de_atuacao' => $this->faker->paragraph(8)
        ];
    }
}
