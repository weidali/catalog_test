<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{

    public function __invoke()
    {
        return view('dashboard.product.create');
    }

}
