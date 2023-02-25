<?php

namespace App\Http\Controllers\customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function index()
  {
    return view('content.customers.customer-view');
  }
}
