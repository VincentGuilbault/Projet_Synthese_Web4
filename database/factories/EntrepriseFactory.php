<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'ville' => $this->faker->city(),
            'code_postal' => $this->faker->regexify('([A-Z][0-9]){3}'),
            'num_telephone' => $this->faker->phoneNumber(),
            'description' => $this->faker->realText(),
        ];
    }
}
