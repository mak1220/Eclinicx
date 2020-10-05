<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\instruct;
use Session;

class InstructionController extends Controller
{
	public function show(){
		$data=instruct::all();
		return view('MedsInstruction.MedsInstruction',["data"=>$data]);
	}
    public function instruction(Request $req)
    {
        
          $validate=$req->validate([
                'med'=>'required|min:3|max:30',
                'desc'=>'required|max:35',
                

        ]);
    	$data=new instruct;
    	$data->Frequency_Name=$req->input('med');
    	$data->Frequency_Description=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','MEDS instruction has been Entered Successfully');
    	return redirect('MedsInstruction');
    }
    public function delete($id)
    {
    	instruct::find($id)->delete();
    	Session::flash('alert','MEDS Instruction has been Deleted Successfully');
    	return redirect('MedsInstruction');
    }

    public function update($id)
    {
    	$data=instruct::find($id);
    	return view('MedsInstruction.MedsInstructionUpdate',["data"=>$data]);
    }
     public function edit(Request $req){

    	$data=instruct::find($req->id);
    	$data->Frequency_Name=$req->input('med');
    	$data->Frequency_Description=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','MEDS Instruction has been Updated Successfully');
    	return redirect('MedsInstruction');

    }

}
