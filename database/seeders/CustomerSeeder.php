<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        Customer::factory(100)->create()->each(function($customer) {
            Order::factory(rand(1,3))->create([
                'customer_id' => $customer->id,
            ])->each(function($order) {

                $count = rand(1, 5);
                for($i = 0; $i < $count; $i++) {
                
                    $product = Product::inRandomOrder()->first();

                    DB::table('order_product')->insert([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                    ]);
                }
                
            });
        });
    }
}
