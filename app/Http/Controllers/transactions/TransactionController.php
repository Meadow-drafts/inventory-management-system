<?php

namespace App\Http\Controllers\transactions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
  public function index()
  {
    $transactions = \App\Models\Transaction :: all();
    return view('content.transactions.transaction-view',['Transactions' => $transactions]);
  }
}
