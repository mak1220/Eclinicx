<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PastMedic;
use App\patient;
use App\vist4;
use DB;
use Session;

class PastMedicationController extends Controller
{
    
    public function store(Request $req){


         $validate=$req->validate([
                'name'=>'required|max:30',
                'dose'=>'required',
                'frequency'=>'required',
                'duration'=>'required',
                'doctor'=>'required',
                'date'=>'required',
                'origin'=>'required',
                'desc'=>'required|max:30',
                'attach'=>'required',
        ]);

    	$data=new PastMedic;
        $data->visit4_id=$req->input('patient');
    	$data->PName=$req->input('name');
    	$data->Dose=$req->input('dose');
    	$data->Freq=$req->input('frequency');
    	$data->Dura=$req->input('duration');
    	$data->Doctor=$req->input('doctor');
    	$data->Date=$req->input('date');
    	$data->OrigDate=$req->input('origin');
    	$data->Desc=$req->input('desc');
    	if($req->hasfile('attach'))
    	{
    		$file=$req->file('attach');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Attach=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Attach='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Data has been Entered successfully');
    	return redirect()->back();
    }

    public function delete($id)
    {
    	PastMedic::find($id)->delete();
    	Session::flash('alert','Data has been deleted successfully');
    	return redirect()->back();
    }
    public function update($id)
    {
        $data =DB::table('patients')
        ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->join('past_medics','past_medics.visit4_id','=','visit4s.id')
       ->select('visit4s.id','past_medics.iD','past_medics.PName','past_medics.Dose','past_medics.Freq','past_medics.Dura','past_medics.Doctor','past_medics.Date','past_medics.OrigDate','past_medics.Desc','past_medics.Attach','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
       ->where('past_medics.iD',$id)
        ->get();
    	return view('Patient.PastMedicationUpdate',["data"=>$data]);
    }

    public function edit(Request $req){
        $data=PastMedic::find($req->id);
    	$data->PName=$req->input('name');
    	$data->Dose=$req->input('dose');
    	$data->Freq=$req->input('frequency');
    	$data->Dura=$req->input('duration');
    	$data->Doctor=$req->input('doctor');
    	$data->Date=$req->input('date');
    	$data->OrigDate=$req->input('origin');
    	$data->Desc=$req->input('desc');
    	if($req->hasfile('attach'))
    	{
    		$file=$req->file('attach');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Attach=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Attach='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Data has been Entered successfully');
    	return redirect()->back();
    }

}
