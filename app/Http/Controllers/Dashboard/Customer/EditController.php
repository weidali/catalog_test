<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{

    public function __invoke(Customer $customer)
    {
        $customers = Customer::all();
        return view('dashboard.customers.edit', compact('customer'));
    }

}
