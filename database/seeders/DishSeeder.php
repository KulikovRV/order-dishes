<?php

namespace Database\Seeders;

use Illuminate\Bus\Dispatcher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Order;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dish::factory()
            ->count(10)
            ->create();
    }
}
