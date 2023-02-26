<?php

namespace App\Http\Controllers\trial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrialBasic extends Controller
{
  public function index()
  {

    $trials = \App\Models\Trial :: all();
    return view('content.trial.trial-basic',['allTrials' => $trials]);

  }

   /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);
        $trial = \App\Models\Trial ::create($data);
        return Response::json($trial);
    }
}
