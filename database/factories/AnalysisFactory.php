<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnalysisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->realText(150)
        ];
    }
}
