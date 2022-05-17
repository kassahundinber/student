<?php

namespace App\Http\Controllers;
use App\Models\Rcv;
use Illuminate\Http\Request;

class RcvController extends Controller
{
    public function register()
  {
  return view('Rcv.register');
  }
    function store(Request $request)
    
    {
      $Rcv =new Rcv();
      $Rcv->graduateid = $request->graduateid;
      $Rcv->companyphone = $request->companyphone;
      $Rcv->companyname = $request->companyname;
      $Rcv->companyemail = $request->companyemail;
      $Rcv->companyregion = $request->companyregion;
      $Rcv->companycity = $request->companycity;
      $Rcv->date = $request->date ;
      $Rcv->reasonofverification = $request->reasonofverification;
     $is_saved = $Rcv->save();
    if($is_saved){
    echo " THE DATA Record saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $Rcv = Rcv::all();
     return view('Rcv.list', compact('Rcv'));
    } 
    public function edit($id)
 {
 $Rcv = Rcv::find($id);
 return view('Rcv.edit', compact('Rcv'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'companyphone' => 'required' ]);
    $Rcv= Rcv::find($request->graduteid);
    $Rcv->companyphone = $request->companyphone;
      $Rcv->companyname = $request->companyname;
      $Rcv->companyemail = $request->companyemail;
      $Rcv->companyregion = $request->companyregion;
      $Rcv->companycity = $request->companycity;
      $Rcv->date = $request->date ;
      $Rcv->reasonofverification = $request->reasonofverification;
    $Rcv->save();
    return redirect('Rcv/list');
    }
    public function delete($graduateid)
 {
    Rcv::where('graduateid', $graduateid)->delete();
 return redirect('Rcv/list');
   
}

public function search($graduateid)
    {
     $Rcv = Rcv::where('graduateid',$graduateid)->first();
     return view('Rcv.search', compact('Rcv'));
    } 
  
}


