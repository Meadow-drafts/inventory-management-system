<?php

namespace App\Http\Controllers\suppliers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
  public function index()
  {
    return view('content.suppliers.supplier-view');
  }
}
