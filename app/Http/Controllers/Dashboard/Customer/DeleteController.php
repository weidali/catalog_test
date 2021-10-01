<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Customer\UpdateRequest;

class DeleteController extends Controller
{

    public function __invoke(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('dashboard.customer.index')
            ->with('delete', __('Customer has been deleted.'));
    }

}
