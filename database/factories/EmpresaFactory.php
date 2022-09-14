<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidato>
 */
class EmpresaFactory extends Factory
{
    //protected $model = Empresa::class;
    
    public function definition()
    {
        return [
            'nome_empresa' => $this->faker->word(),
            'email_empresa' => $this->faker->email(),
            'cnpj' => $this->faker->randomNumber(),
            'senha_empresa' => $this->faker->password()
        ];
    }
}
