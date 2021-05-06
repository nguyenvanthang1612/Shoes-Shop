<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::factory(10)->create();
    }
}
