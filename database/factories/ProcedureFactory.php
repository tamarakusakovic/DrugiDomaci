<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProcedureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'laboratory_id' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(1000, 7000),
            'analysis_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
