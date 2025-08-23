<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function showForm()
    {
        return view('customer');
    }

    public function store(Request $request)
    {
        
        try{
            //Data Validate
            $validated =$request->validate([

                'name' => 'required|string|max:100',
                'email'=> 'required|email|unique:customers',
                'bio'  => 'required|string',

            ]);

            //Data Insert
            Customer::create([

                'name'  => $validated['name'],
                'email' => $validated['email'],
                'bio'   => $validated['bio'],

            ]);

            return redirect('/customer')->with('success','Information insert successfull');
        
        } 
        catch (\Illuminate\Validation\ValidationException $e) {
            // Redirect back with a custom alert for duplicate email
            return redirect('/customer')
                ->with('error', 'Email already exists or data is invalid.')
                ->withErrors($e->errors())
                ->withInput();
        }
    }
}
