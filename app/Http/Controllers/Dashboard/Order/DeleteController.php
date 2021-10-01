<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DeleteController extends Controller
{

    public function __invoke(Order $order)
    {
        $order->delete();
        return redirect()->route('dashboard.order.index')
            ->with('delete',__('Order has been deleted.'));
    }

}
