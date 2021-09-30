<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DeleteController extends Controller
{

    public function __invoke(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.product.index')
            ->with('delete',__('Product has been deleted.'));
    }

}
