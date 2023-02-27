<?php

namespace App\Http\Controllers\suppliers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  public function index()
  {
    $suppliers = \App\Models\Supplier :: all();
    return view('content.suppliers.supplier-view',['Suppliers' => $suppliers]);
  }

  public function store(Request $request)
  {
    $storeData = $request->validate([
      'customer_name' => 'required',
      'phone' => 'required',
      'email' => 'required',
      'company_name' => 'required',
      'address' => 'required',
    ]);
    $supplier = Supplier :: create($storeData);

    // Customer::create($request->post());

    return redirect('/supplier/view')->with('success','Supplier has been created successfully.');
  }
}
