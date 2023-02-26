<?php

namespace App\Http\Controllers\transactions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
  public function index()
  {
    $transactions =  DB:: select('call sp_transaction_list()');
    return view('content.transactions.transaction-view',['Transactions' => $transactions]);
  }
}
