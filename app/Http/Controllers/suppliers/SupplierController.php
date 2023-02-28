<?php

namespace App\Http\Controllers\suppliers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SupplierController extends Controller
{
  public function index()
  {
    $suppliers = \App\Models\Supplier :: all();
    return view('content.suppliers.supplier-view',['Suppliers' => $suppliers]);
  }

  public function store(Request $request)
  {
      $supplier_name = $request-> get('supplier_name');
      $phone = $request -> get('phone');
      $email = $request -> get('email');
      $company_name = $request -> get('company_name');
      $address = $request -> get('address');

      $result = DB::select('call sp_supplier_create(?,?,?,?,?)',array($supplier_name, $phone,$email, $company_name, $address));

    // Customer::create($request->post());

    return redirect('/supplier/view')->with('success','Supplier has been created successfully.');
  }


}
