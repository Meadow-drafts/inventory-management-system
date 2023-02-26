<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = \App\Models\Customer :: all();
    return view('content.customers.customer-view',['Customers' => $customers]);
  }
}
