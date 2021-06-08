<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name_category' => 'Men',
                'desc' => 'Men Power'
            ],
            [
                'name_category' => 'Women',
                'desc' => 'Women Power'
            ],
            [
                'name_category' => 'Kid',
                'desc' => 'Kid Power'
            ]
        ]);
    }
}
