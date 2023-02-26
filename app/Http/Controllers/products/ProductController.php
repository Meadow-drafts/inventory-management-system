<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    $products = \App\Models\Product :: all();
    return view('content.products.product-view',['Products' => $products]);
  }
}
