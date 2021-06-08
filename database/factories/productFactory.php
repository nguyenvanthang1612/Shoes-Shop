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
            'name' => ucfirst($this->faker->word()),
            'desc' => $this->faker->sentence(2, true),
            'SKU' => $this->faker->ean13(),
            'size' => rand(1,10),
            'brand' => $this->faker->word(),
            'img' => [$this->faker->imageUrl($width = 253, $height = 347)],
            'category_id' => rand(1,3),
            'inventory_id' => rand(1,10),
            'price' =>rand(1,10)
        ];
    }
}
