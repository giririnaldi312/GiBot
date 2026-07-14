<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        // Nama depan untuk command
        $firstName = strtolower(
            explode(' ', $this->faker->firstName())[0]
        );

        return [
            'command' => '/' . $firstName,

            // NIM random 10 digit
            'nim' => (string) $this->faker->numberBetween(
                1000000000,
                9999999999
            ),

            // Nama orang Indonesia
            'nama' => strtoupper($this->faker->name()),
        ];
    }
}
