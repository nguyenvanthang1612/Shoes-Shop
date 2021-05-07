<?php

namespace Database\Factories;

use App\Models\UserPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserPayment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,10),
            'payment_type'=>$this->faker->word(),
            'provider'=>$this->faker->word(),
            'account_no'=>rand(1,10),
            'expiry'=>$this->faker->dateTime(),
        ];
    }
}
