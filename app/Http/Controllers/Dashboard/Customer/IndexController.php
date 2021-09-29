<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __invoke()
    {
        $customers = Customer::paginate(50);
        return view('dashboard.customers.index', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

}
