<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer_view');
    }

    public function storeData(Request $res)
    {
        $customer = new Customer;
        $customer->name = $res['name'];
        $customer->address = $res['address'];
        $customer->country = $res['country'];
        $customer->state = $res['state'];
        $customer->city = $res['city'];
        $customer->save();

        return redirect('/customer/viewcustomer');
    }

    public function getcustomerview()
    {
        $customer = Customer::all();
        $c = compact('customer');
        return view('getcustomerdata')->with($c);
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);

        if(!is_null($customer))
        {
            $customer->delete();
        }
        return redirect('/customer/viewcustomer');

    }
}