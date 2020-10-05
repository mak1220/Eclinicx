<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docstatus;
use Session;

class DoctorStatusController extends Controller
{
	public function show(){
		$data=docstatus::all();
		return view('DoctorStatus.DoctorStatus',["data"=>$data]);

	}
    public function DocStatus(Request $req){

            $validate=$req->validate([
                'name'=>'required|max:30',
                'desc'=>'required|max:30',

        ]);
                

    	$data=new docstatus;
    	$data->DoctorStatus_Name=$req->input('name');
    	$data->DoctorStatus_Description=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','DoctorStatus has been Successfully Entered');
    	return redirect('DoctorStatus');
    }

   public function delete($id)
   {
   	docstatus::find($id)->delete();
   	Session::flash('alert','DoctorStatus has been deleted Successfully ');
    return redirect('DoctorStatus');
   }

    public function update($id)
    {
        $data=docstatus::find($id);
        return view('DoctorStatus.DocStatusUpdate',["data"=>$data]);
    }
    public function edit(Request $req){

    	$data=docstatus::find($req->id);
    	$data->DoctorStatus_Name=$req->input('name');
    	$data->DoctorStatus_Description=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','DoctorStatus has been updated Successfully');
    	return redirect('DoctorStatus');
    }
}
