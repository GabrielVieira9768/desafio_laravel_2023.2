<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'fotoPerfil' => null,
            'email' => fake()->email(),
            'cpf' => fake()->text(),
            'dataNascimento' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'endereco' => fake()->address(),
            'telefone' => fake()->phoneNumber(),
        ];
    }
}
