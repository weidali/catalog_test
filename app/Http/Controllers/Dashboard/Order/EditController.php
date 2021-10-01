<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class EditController extends Controller
{

    public function __invoke(Order $order)
    {
        return view('dashboard.order.edit', compact('order'));
    }

}
