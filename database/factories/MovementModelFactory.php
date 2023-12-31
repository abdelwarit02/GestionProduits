<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovementModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [


            'type'=>fake()->randomElement(['entré','sortie']),
            'date'=>fake()->date(),
            'quantite'=>fake()->numberBetween(5,100),



        ];
    }
}
