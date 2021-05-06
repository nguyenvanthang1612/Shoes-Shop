<?php

namespace Database\Factories;

use App\Models\user_payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_paymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,10),
            'payment_type'=>$this->word(),
            'provider'=>$this->word(),
            'account_no'=>$this->phoneNumber(),
            'expiry'=>$this->dateTime(),
        ];
    }
}
