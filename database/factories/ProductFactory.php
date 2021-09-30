<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'sku' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'description' => $this->faker->text(300),
            'price' => $this->faker->unique()->numberBetween(1000, 100000000),
            'image' => 'uploads/products/' . $this->faker->image('storage/app/public/uploads/products',300,300, null, false),
            'created_at'=> $this->faker->dateTimeBetween('-10 days', now()),
        ];
    }
}
