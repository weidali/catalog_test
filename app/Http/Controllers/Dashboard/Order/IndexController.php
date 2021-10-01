<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class IndexController extends Controller
{

    public function __invoke()
    {
        $orders = Order::paginate(50);

        return view('dashboard.order.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

}
