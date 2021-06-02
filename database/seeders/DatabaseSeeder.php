<?php

namespace Database\Seeders;

use App\Models\order_details;
use App\Models\order_items;
use App\Models\OrderDetail;
use App\Models\UserAddress;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            [
                'user_name' => 'admin',
                'first_name' => 'admin',
                'last_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'telephone' => '0393656099',
                'role' => '1',
                'avatar' => 'public/backend/images/chrome.png'
            ],
            [
                'user_name' => 'thang',
                'first_name' => 'nguyen',
                'last_name' => 'thang',
                'email' => 'thang@gmail.com',
                'password' => bcrypt('thang123'),
                'telephone' => '0393656099',
                'role' => '2',
                'avatar' => 'public/backend/images/logo-dark.png'
            ],
            [
                'user_name' => 'quan',
                'first_name' => 'luong',
                'last_name' => 'quan',
                'email' => 'quan@gmail.com',
                'password' => bcrypt('quan123'),
                'telephone' => '0393656099',
                'role' => '3',
                'avatar' => 'public/backend/images/logo-icon.png'
            ]
        ]);
    }
}
