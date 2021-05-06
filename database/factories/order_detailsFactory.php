<?php

namespace Database\Factories;

use App\Models\order_details;
use Illuminate\Database\Eloquent\Factories\Factory;

class order_detailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = order_details::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,10),
            'total'=>rand(100000,100000000),
        ];
    }
}
