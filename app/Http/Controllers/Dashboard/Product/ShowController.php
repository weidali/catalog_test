<?php

namespace App\Http\Controllers\Dashboard\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ShowController extends Controller
{

    public function __invoke(Product $product)
    {
        return view('dashboard.product.show', compact('product'));
    }

}
