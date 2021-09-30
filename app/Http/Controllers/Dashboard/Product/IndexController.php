<?php

namespace App\Http\Controllers\Dashboard\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{

    public function __invoke()
    {
        $products = Product::paginate(50);
        return view('dashboard.product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

}
