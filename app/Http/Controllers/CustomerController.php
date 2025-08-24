<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::latest()->paginate(10);
        return view('customers.view', compact('customer'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => ['required','string', 'max:100'],
            'email' => ['required','email','max:120','unique:customers,email'],
            'phone' => ['nullable','string', 'max:15'],
            'photo' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:2048'],
            'bio'   => ['nullable'],
        ]);

        // Image upload
        $uploadPath = public_path('uploads/images/customers');
        if(!File::exists($uploadPath)){
            File::makeDirectory($uploadPath, 0755, true);
        }

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = 'customer_'.date('YmHi').uniqid().'.'.$file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);
            $data['photo'] = 'uploads/images/customers/'.$filename;
        }

        Customer::create($data);
        return redirect()->route('customers.index')->with('success','Customer created successfully');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'name'  => ['required','string', 'max:100'],
            'email' => ['required','email','max:120','unique:customers,email,'.$customer->id],
            'phone' => ['nullable','string', 'max:15'],
            'photo' => ['nullable','image','mimes:jpg,jpeg,png,webp','max:2048'],
            'bio'   => ['nullable','string'],
        ]);

        // Image upload
        $uploadPath = public_path('uploads/images/customers');
        if(!File::exists($uploadPath)){
            File::makeDirectory($uploadPath, 0755, true);
        }

        if($request->hasFile('photo')){
            // if($customer->photo && File::exists(public_path($customer->photo))){
            //     File::delete(public_path($customer->photo));
            // }
            $file = $request->file('photo');
            @unlink(public_path($customer->photo));
            $filename = 'customer_'.date('YmHi').uniqid().'.'.$file->getClientOriginalExtension();
            $file->move($uploadPath, $filename);
            $data['photo'] = 'uploads/images/customers/'.$filename;
        }

        $customer->update($data);
        return redirect()->route('customers.index')->with('success','Customer updated successfully');
    }

    public function destroy(Customer $customer)
    {
        if ($customer->photo && File::exists(public_path($customer->photo))) {
            File::delete(public_path($customer->photo));
        }
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Customer deleted successfully');
    }
}
