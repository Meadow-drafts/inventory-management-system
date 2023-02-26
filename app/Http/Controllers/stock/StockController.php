<?php

namespace App\Http\Controllers\stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
  public function index()
  {
    $stocks = \App\Models\Stock :: all();
    return view('content.stock.stock-view',['Stocks' => $stocks]);
  }
}
