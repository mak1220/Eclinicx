<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\doct;
use App\status;
use Session;

class doctorController extends Controller
{
   
   public function show(){
   	$data = doct::all();
   	return view('Doctor.doctor',["data"=>$data]);
   }

    public function doctor(Request $req)
    {


        $validate=$req->validate([
                'status'=>'required|min:4|max:10',
                'name'=>'required|min:3|max:30',
                'phone'=>'required|min:11|max:11',
                'email'=>'required|email',
                'licence'=>'required|max:30',
                'depart'=>'required|max:30',


        ]);
        $data= new doct;
        $data->Status=$req->input('status');
        $data->Doctor_Name=$req->input('name');
        $data->Phone_Number=$req->input('phone');
        $data->email=$req->input('email');
        $data->Doctor_Licence=$req->input('licence');
        $data->Doctor_Department=$req->input('depart');
        $data->save();
        $req->session()->flash('alert','Doctor Successfuly Enterd');
        return redirect('doctor');

    }

    public function delete($id)
    {
      doct::find($id)->delete();
      Session::flash('alert','Doctor has been deleted Successfuly');
        return redirect('doctor');
    }

    public function update($id)
    {
      $data=doct::find($id);
      return view('Doctor.doctorUpdate',["data"=>$data]);
    }

    public function edit(Request $req)
    {
        $data= doct::find($req->id);
        $data->Status=$req->input('status');
        $data->Doctor_Name=$req->input('name');
        $data->Phone_Number=$req->input('phone');
        $data->email=$req->input('email');
        $data->Doctor_Licence=$req->input('licence');
        $data->Doctor_Department=$req->input('depart');
        $data->save();
        $req->session()->flash('alert','Doctor has been Updated Successfuly ');
        return redirect('doctor');

    }

      //Doctor Status

     public function status(Request $req){
          $validate=$req->validate([
                'status'=>'required|min:3|max:20',
        ]);
          
                 $rest = new status;
                 $rest->Status=$req->input('status');
                 $rest->save();
                 $req->session()->flash('alert','Data entered successfully');
                  return redirect('status');

    }

    public function statusShow()
    {
        $data=status::all();
        return view('Doctor.status',["data"=>$data]);
    }
    
      public function statusdelete($id)
    {
        status::find($id)->delete();
        Session::flash('alert','Data has been deleted successfully');
        return redirect('status');
    }

    public function statusupdate($id)
    {
        $data=status::find($id);
        return view('Doctor.statusUpdate',["data"=>$data]);
    }
     public function statusedit(request $req)
    {
                 $rest=status::find($req->id);
                 $rest->Status=$req->input('status');
                 $rest->save();
                 $req->session()->flash('alert','Data Updated successfully');
                  return redirect('status');
    }
}
