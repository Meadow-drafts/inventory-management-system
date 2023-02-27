<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = Customer :: all();
    return view('content.customers.customer-view',['Customers' => $customers]);
  }

  public function store(Request $request)
  {
     $storeData = $request->validate([
          'customer_name' => 'required',
          'phone' => 'required',
          'email' => 'required',
          'address' => 'required',
      ]);
      $customer = Customer :: create($storeData);
      
      // Customer::create($request->post());

     return redirect('/customer/view')->with('success','Customer has been created successfully.');
  }


  public function update(Request $request, $id)
  {
      $updateData = $request->validate([
          'customer_name' => 'required|max:255',
          'phone' => 'required|numeric',
          'email' => 'required|max:255',
          'address' => 'required|max:255',
      ]);
      Customer::whereId($id)->update($updateData);
      return redirect('/customer/view')->with('completed', 'Customer has been updated');
  }

  // public function oupdate(Request $request, Customer $customer)
  // {      

  //     $request->validate([
  //         'customer_name' => 'required',
  //         'phone' => 'required',
  //         'email' => 'required',
  //         'address' => 'required',
  //     ]);
      
  //     $customer->fill($request->post())->save();

  //     return redirect('/customer/view')->with('success','Customer has been updated successfully.');
  //   }


  /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('customers.create');
    }

   

    public function show(Company $company)
    {
        return view('companies.show',compact('company'));
    }


    public function edit(Company $company)
    {
        return view('companies.edit',compact('company'));
    }

    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
    }
}
