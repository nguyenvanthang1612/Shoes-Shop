<?php

namespace Database\Seeders;

use App\Models\user_payment;
use Illuminate\Database\Seeder;

class user_paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_payment::factory(10)->create();
    }
}
