<?php

namespace Database\Seeders;

use App\Models\order_items;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class order_itemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order_items::factory(10)->create();
    }
}
