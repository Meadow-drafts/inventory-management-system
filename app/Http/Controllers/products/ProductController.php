<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
  public function index()
  {
    $products = DB:: select('call sp_product_list()');
    return view('content.products.product-view',['Products' => $products]);
  }
}
