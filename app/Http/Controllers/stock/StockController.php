<?php

namespace App\Http\Controllers\stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
  public function index()
  {
    return view('content.stock.stock-view');
  }
}
