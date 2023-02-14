<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Dish;
use App\Models\DishOrder;


class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = DB::table('orders')->pluck('id');
        foreach ($orders as $order) {
            $dishes = DB::table('dishes')->pluck('id')->random(3);
            foreach ($dishes as $dishe) {
                DishOrder::firstOrCreate([
                    'dish_id' => $dishe,
                    'order_id' => $order,
                ]);
            }
        }
    }
}
