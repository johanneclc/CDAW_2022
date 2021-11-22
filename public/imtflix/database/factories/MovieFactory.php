<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //'name', 'detail', 'annee', 'categorie'
        $name = $this->faker->word();
        $detail = $this->faker->word();
        $annee = $this->faker->word();
        $categorie = $this->faker->word();
        return [
            'name' => $name,
            'detail' => $detail,
            'annee' => $annee,
            'categorie' => $categorie,
            'category_id' => 1,

          ];
    }
}