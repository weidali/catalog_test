<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $folder = 'uploads/products';

        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put($folder, $data['image']);

        Product::firstOrCreate($data);
        return redirect()->route('dashboard.product.index')
            ->with('success',__('Product has been added.'));
        
    }

}
