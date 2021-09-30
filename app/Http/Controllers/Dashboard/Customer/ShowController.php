<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{

    public function __invoke(Customer $customer)
    {
        $customers = Customer::all();
        return view('dashboard.customer.show', compact('customer'));
    }

}
