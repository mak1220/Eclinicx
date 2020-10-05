<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\refere;
use App\hospital;
use Session;

class refereeController extends Controller
{
	public function show(){
		$data=refere::all();
		return view('Referee.referee',["data"=>$data]);
	}
    public function referee(Request $req){

         $validate=$req->validate([
                'name'=>'required|min:3|max:15',
                'email'=>'required|email',
                'phone'=>'required|min:11|max:11',
                'hospital'=>'required|min:10|max:20',
                'discount'=>'required',

        ]);

    	$data= new refere;
    	$data->Referee_Name=$req->input('name');
    	$data->Referee_Phone=$req->input('phone');
    	$data->email=$req->input('email');
    	$data->Referee_Hospital=$req->input('hospital');
    	$data->Referee_Share=$req->input('discount');
    	$data->save();
    	$req->session()->flash('alert','Referee Successfully Entered');
    	return redirect('referee');

    }

    public function delete($id)
    {
        refere::find($id)->delete();
        Session::flash('alert','Referee has been deleted Successfully');
        return redirect('referee');
    }
    public function update($id)
    {
        $data=refere::find($id);
        return view('Referee.refereeUpdate',["data"=>$data]);
    }

    public function edit(Request $req){
        
        $data= refere::find($req->id);
        $data->Referee_Name=$req->input('name');
        $data->Referee_Phone=$req->input('phone');
        $data->email=$req->input('email');
        $data->Referee_Hospital=$req->input('hospital');
        $data->Referee_Share=$req->input('discount');
        $data->save();
        $req->session()->flash('alert','Referee has been Updated Successfully');
        return redirect('referee');

    }


    // Add Hospital
    public function Hospital(Request $req){
          $validate=$req->validate([
                'hospital'=>'required|min:3|max:20',
        ]);
          
                 $rest = new hospital;
                 $rest->Hospital=$req->input('hospital');
                 $rest->save();
                 $req->session()->flash('alert','Data entered successfully');
                  return redirect('Hospital');

    }

    public function hospitalShow()
    {
        $data=hospital::all();
        return view('Referee.Hospital',["data"=>$data]);
    }
    
      public function hospitaldelete($id)
    {
        hospital::find($id)->delete();
        Session::flash('alert','Data has been deleted successfully');
        return redirect('Hospital');
    }

    public function hospitalupdate($id)
    {
        $data=hospital::find($id);
        return view('Referee.HospitalUpdate',["data"=>$data]);
    }
     public function hospitaledit(request $req)
    {
                 $rest=hospital::find($req->id);
                 $rest->Hospital=$req->input('hospital');
                 $rest->save();
                 $req->session()->flash('alert','Data Updated successfully');
                  return redirect('Hospital');
    }
    
}
