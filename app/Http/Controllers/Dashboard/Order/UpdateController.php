<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\UpdateRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Order $order)
    {
        $folder = 'uploads/products';

        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put($folder, $data['image']);
        $order->update($data);

        return view('dashboard.order.show', compact('order'))
            ->with('success', __('Order has been updated.'));
    }

}
