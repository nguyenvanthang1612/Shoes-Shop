<?php

namespace Database\Seeders;

use App\Models\order_details;
use App\Models\order_items;
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
        $this->call(categoriesSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(productSeeder::class);
        $this->call(order_detailsSeeder::class);
        $this->call(order_itemsSeeder::class);
        $this->call(usersSeeder::class);
        $this->call(user_addressSeeder::class);
        $this->call(user_paymentSeeder::class);

    }
}
