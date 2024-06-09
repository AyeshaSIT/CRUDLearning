<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home");
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $url = url('/customer');
        $title= "Customer Registration";
        $customer = new Customer(); 
        $data = compact('url','title','customer');
        return view("customeradd")->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->customer_name = $request->input('name');
        $customer->customer_email = $request->input('email');
        $customer->customer_gender = $request->input('gender');
        $customer->customer_address = $request->input('address');
        $customer->customer_dob = $request->input('dob');
        $customer->save();
        // Redirect or return a response
        return redirect(route('customer.view'));
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
        $customersalldata = Customer::all();
        $data = compact('customersalldata');
        return view("customerview")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customerview');
        }
        else
        {
            $url = url('/customer/update') ."/". $id;
            $title= "Update Customer";
            $data = compact('customer','url','title');
            return view("customeradd")->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);
        $customer->customer_name = $request->input('name');
        $customer->customer_email = $request->input('email');
        $customer->customer_gender = $request->input('gender');
        $customer->customer_address = $request->input('address');
        $customer->customer_dob = $request->input('dob');
        $customer->save();
        return redirect('/customer/view');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customers = Customer::find($id);
        if(!is_null($customers)){
            $customers->delete();
        }
        return redirect('/customer/view');

    }
}
