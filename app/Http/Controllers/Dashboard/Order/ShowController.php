<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class ShowController extends Controller
{

    public function __invoke(Order $order)
    {
        return view('dashboard.order.show', compact('order'));
    }

}
