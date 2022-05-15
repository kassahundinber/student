<?php
namespace App\Http\Controllers;
use App\Models\Gsr;


use Illuminate\Http\Request;

class GsrController extends Controller
{
    public function register()
  {
  return view('Gsr.register');
  }
    function store(Request $request)
    
    {
      $Gsr =new Gsr();
      $Gsr->id = $request->id;
      $Gsr->firstname = $request->firstname;
      $Gsr->middlename = $request->middlename;
      $Gsr->lastname = $request->lastname;
      $Gsr->yearofgraduation = $request->yearofgraduation;
      $Gsr->qualification = $request->qualification;
      $Gsr->gender = $request->gender;
      $Gsr->department = $request->department;
     
     $is_saved = $Gsr->save();
    if($is_saved){
    echo " THE DATA Record saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $Gsr = Gsr::all();
     return view('Gsr.list', compact('Gsr'));
    } 
    public function edit($id)
 {
 $Gsr = Gsr::find($id);
 return view('Gsr.edit', compact('Gsr'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required' ]);
    $Gsr= Gsr::find($request->id);
    $Gsr->firstname = $request->firstname;
    $Gsr->middlename = $request->middlename;
    $Gsr->lastname = $request->lastname;
    $Gsr->yearofgraduation = $request->yearofgraduation;
    $Gsr->qualification = $request->qualification;
    $Gsr->gender = $request->gender;
    $Gsr->department = $request->department;
    $Gsr->save();
    return redirect('Gsr/list');
    }
    public function delete($id)
 {
    Gsr::where('id', $id)->delete();
 return redirect('Gsr/list');
   
}

public function search($id)
    {
     $Gsr = Gsr::where('id',$id)->first();
     return view('Gsr.search', compact('Gsr'));
    } 
  
}
