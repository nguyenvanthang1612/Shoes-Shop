<?php

namespace Database\Seeders;

use App\Models\user_address;
use Illuminate\Database\Seeder;

class user_addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_address::factory(10)->create();
    }
}
