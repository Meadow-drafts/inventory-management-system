<?php

namespace App\Http\Controllers\examples;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Example;


class ExampleController extends Controller
{
  public function index()
  {

//    $examples = Example :: all();
    return view('content.examples.example');

  }
public function alls()
  {

    $examples = Example :: all();
    $contenus =  view('content.examples.rows',['Examples' => $examples]);
    return response()->json(['message'=> 'ok', 'data'=>$contenus]);

  }

  public function store(Request $request){
    Example :: create([
      'name' => $request-> get('name'),
      'age' => $request -> get('age'),

    ]);
    return redirect('/example');
  }

  public function edit($id)
  {
    $example = Example::find($id);
    return response()->json($example);
  }

  public function destroy($id)
  {
    Example::find($id)->delete();

    return response()->json(['success'=>'Record deleted successfully.']);
  }

  public function show($id)
  {
    //
  }

}
