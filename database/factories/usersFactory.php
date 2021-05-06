<?php

namespace Database\Factories;

use App\Models\users;
use Illuminate\Database\Eloquent\Factories\Factory;

class usersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name'=>$this->faker->word(),
            'password'=>$this->faker->word(),
            'first_name'=>$this->faker->word(),
            'last_name'=>$this->faker->word(),
            'telephone'=>$this->faker->phoneNumber(),
        ];
    }
}
