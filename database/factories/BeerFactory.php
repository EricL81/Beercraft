<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Beer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->word,
            "description"=>$this->faker->text,
            "price"=>$this->faker->randomFloat(2,1,1000)
        ];
    }
}
