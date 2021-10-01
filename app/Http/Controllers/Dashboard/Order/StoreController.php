<?php

namespace App\Http\Controllers\Dashboard\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\StoreRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $folder = 'uploads/orders';

        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put($folder, $data['image']);

        Order::firstOrCreate($data);
        return redirect()->route('dashboard.order.index')
            ->with('success',__('Order has been added.'));
        
    }

}
