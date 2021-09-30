<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Customer\StoreRequest;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        if($request->file()) {
            $photo = $request->file('photo');
            $folder = 'public/uploads/customers';
            $photo_name = time().'_'.$request->file('photo')->getSize().'.'.$request->file('photo')->getClientOriginalExtension();
            $photo = $photo->storeAs($folder, $photo_name);
            
            $customer = new Customer;
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->phone = $request->input('phone');
            $customer->photo = $photo_name;
            $customer->save();
  
        }        
        return redirect()->route('dashboard.customer.index')
            ->with('success',__('Customer has been added.'));
    }

}
