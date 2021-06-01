<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_item')->insert([
            [
                'order_id' => 1,
                'product_name' => 'shoes',
                'product_price' => 100,
                'product_quantity' => 10
            ]
        ]);
    }
}
