<?php

namespace App\Http\Controllers\examples;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Example;


class ExampleController extends Controller
{
  public function index()
  {

    $trials = Example :: all();
    return view('content.trial.trial-basic',['allTrials' => $trials]);

  }

  public function store(Request $request){
    Trial :: create([
      'name' => $request-> get('name'),
      'price' => $request -> get('price'),

    ]);
    return redirect('/trial/basic');
  }
}
