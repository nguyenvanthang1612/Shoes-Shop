<?php

namespace Database\Factories;

use App\Models\user_address;
use Illuminate\Database\Eloquent\Factories\Factory;

class user_addressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,10),
            'address'=> $this->streetAddress(),
            'city'=> $this->city(),
            'country' => $this->country(),
            'telephone' => $this->phoneNumber(),
        ];
    }
}
