<?php

namespace Database\Factories;

use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,10),
            'address'=> $this->faker->streetAddress(),
            'city'=> $this->faker->city(),
            'country' => $this->faker->country(),
            'telephone' => rand(1,10)
        ];
    }
}