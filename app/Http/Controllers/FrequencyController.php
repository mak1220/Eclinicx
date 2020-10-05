<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Freq;
use Session;

class FrequencyController extends Controller
{
	public function show(){
		$data=Freq::all();
		return view('MedsFrequency.MedsFrequency',["data"=>$data]);
	}
    public function frequency(Request $req){

          $validate=$req->validate([
                'med'=>'required|min:3|max:30',
                'desc'=>'required|max:35',
                

        ]);

    	$data=new Freq;
    	$data->Frequency_Name=$req->input('med');
    	$data->Frequency_Description=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','MEDS Frequency has been Entered Successfully');
    	return redirect('MedsFrequency');

    }

    public function delete($id)
    {
    	Freq::find($id)->delete();
    	Session::flash('alert','MEDS Frequency has been Deleted Successfully');
    	return redirect('MedsFrequency');
    }

    public function update($id)
    {
    	$data=Freq::find($id);
    	return view('MedsFrequency.MedsFrequencyUpdate',["data"=>$data]);
    }
     public function edit(Request $req){

    	$data=Freq::find($req->id);
    	$data->Frequency_Name=$req->input('med');
    	$data->Frequency_Description=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','MEDS Frequency has been Updated Successfully');
    	return redirect('MedsFrequency');

    }


}
