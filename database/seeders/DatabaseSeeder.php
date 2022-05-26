<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Raw;
use App\Models\RawProduct;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Product::factory(10)->create();
        // Raw::factory(30)->create();

        RawProduct::factory(50)->create();
    }
}
