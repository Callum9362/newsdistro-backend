<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'headline' => $this->faker->name(),
            'body' => $this->faker->sentence(),
            'release_date' => now(),
            'url' => $this->faker->url()
        ];
    }
}
