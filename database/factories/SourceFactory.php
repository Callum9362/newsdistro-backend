<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'code' => $this->faker->randomElement(['GOOG', 'YHOO', 'BLOOM']),
            'website' => $this->faker->url(),
        ];
    }
}
