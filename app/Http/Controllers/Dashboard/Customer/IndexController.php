<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function __invoke()
    {
        $customers = Customer::paginate(50);


        $customer = Customer::find(10);
        $orders = Order::all();
        $order = Order::find(5);
        $product = Product::find(4);
        
        // DB::table('orders')->insert([
        //     'customer_id' => '1',
        // ]);
        
        // DB::table('order_product')->insert([
        //     'order_id' => '5',
        //     'product_id' => '15',
        // ]);
        // DB::table('order_product')->insert([
        //     'order_id' => '5',
        //     'product_id' => '16',
        // ]);
        
        // user@mail.com

        
        // DB::table('users')->insert([
        //     'name' => 'user2',
        //     'email' => 'user@mail.ru',
        //     'password' => 'Aa123456',
        //     'created_at' => '2021-10-01 02:57:17',
        // ]);
        
        // dump($order->customer->name);
        // dump($order->products);
        // dump($product->orders);
        // dd($orders->random(2));


        return view('dashboard.customer.index', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

}
