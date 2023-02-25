<?php

namespace App\Http\Controllers\trial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrialBasic extends Controller
{
  public function index()
  {
    return view('content.trial.trial-basic');
  }
}
