<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'SKU' => $this->faker->ean13(),
            'quantity' => rand(1,10),
            'price' =>rand(1,10),
            'client_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => rand(1,10),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'payment_type' => $this->faker->word()
        ];
    }
}
