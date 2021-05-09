<?php

namespace Database\Seeders;

use App\Models\order_details;
use App\Models\order_items;
use App\Models\OrderDetail;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
