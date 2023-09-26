<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProduitModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
           'libelle'=>fake()->word(),
           'code_bare'=>fake()->randomNumber(),
           'quantite_produit'=>fake()->numberBetween(1,50),
           'prix_achat'=>fake()->numberBetween(5,100),
           'prix_vente'=>fake()->numberBetween(7,200)

        ];
    }
}
