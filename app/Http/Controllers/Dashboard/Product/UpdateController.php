<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\UpdateRequest;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Product $product)
    {
        $folder = 'uploads/products';

        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put($folder, $data['image']);
        $product->update($data);

        return view('dashboard.product.show', compact('product'))
            ->with('success', __('Product has been updated.'));
    }

}
