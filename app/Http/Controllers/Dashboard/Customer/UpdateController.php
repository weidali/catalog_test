<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Customer\UpdateRequest;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Customer $customer)
    {
        $data = $request->validated();
        $customer->update($data);
        return view('dashboard.customer.show', compact('customer'));
    }

}
