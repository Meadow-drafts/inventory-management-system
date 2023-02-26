<?php

namespace App\Http\Controllers\suppliers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  public function index()
  {
    $suppliers = \App\Models\Supplier :: all();
    return view('content.suppliers.supplier-view',['Suppliers' => $suppliers]);
  }
}
