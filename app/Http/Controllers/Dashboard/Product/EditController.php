<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class EditController extends Controller
{

    public function __invoke(Product $product)
    {
        return view('dashboard.product.edit', compact('product'));
    }

}
