<?php

namespace App\Http\Controllers\Dashboard\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $customersCount = Customer::count();
        $productsCount = Product::count();
        $ordersCount = Order::count();
        // dd($ordersCount);
        
        return view('dashboard.main.index', compact('customersCount', 'productsCount', 'ordersCount'));
    }
}
