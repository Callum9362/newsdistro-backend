<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Social Media', 'Media Monitoring', 'Press Release Distribution', 'Analytics']),
            'code' => $this->faker->randomElement(['SOCIAL', 'MONITOR', 'DISTRO', 'ANALYTICS']),
            'price' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->url(),
            'description' => $this->faker->sentence(),
        ];
    }
}
