<?php

namespace Database\Seeders;

use App\Models\order_details;
use Illuminate\Database\Seeder;

class order_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order_details::factory(10)->create();
    }
}
