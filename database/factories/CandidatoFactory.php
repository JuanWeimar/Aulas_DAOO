<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidato>
 */
class CandidatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'competencia' => $this->faker->paragraph(4),
            'nome_candidato' => $this->faker->name(),
            'email_candidato' => $this->faker->safeEmail(),
            'curriculo' => $this->faker->word(),
            'cpf' => $this->faker->randomNumber(),
            'senha_candidato' => $this->faker->password()
        ];
    }
}
