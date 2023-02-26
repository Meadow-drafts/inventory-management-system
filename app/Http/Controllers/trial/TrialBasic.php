<?php

namespace App\Http\Controllers\trial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trial;


class TrialBasic extends Controller
{
  public function index()
  {

    $trials = Trial :: all();
    return view('content.trial.trial-basic',['allTrials' => $trials]);

  }

   /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
      Trial ::create([
        'name' => $request->get('name'),
        'price' => $request->get('price'),
       
      ]);
      return response()->json(['success'=>'Record saved successfully.']);
    }

        //  * Show the form for editing the specified resource.
    public function edit($id)
    {
        $trial = Trial::find($id);
        return response()->json($trial);
    }


    public function destroy($id)
    {
      Trial::find($id)->delete();
      
        return response()->json(['success'=>'Record deleted successfully.']);
    }
}
