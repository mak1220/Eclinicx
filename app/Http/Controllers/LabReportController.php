<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LabReport;
use App\patient;
use App\visit4;
use DB;
use Session;

class LabReportController extends Controller
{
     public function show()
	{
		$pro=LabReport::all();
		return view('Patient.LabReports',["pro"=>$pro]);
	}
    public function store(Request $req){


         $validate=$req->validate([
                'name'=>'required|max:30',
                'type'=>'required',
                'location'=>'required',
                'doctor'=>'required',
                'date'=>'required',
                'origin'=>'required',
                'desc'=>'required|max:30',
                'file'=>'required',
        ]);

    	$data=new LabReport;
        $data->visit4_id=$req->input('patient');
    	$data->Type=$req->input('type');
    	$data->PName=$req->input('name');
    	$data->doctor=$req->input('doctor');
    	$data->Location=$req->input('location');
    	$data->date=$req->input('date');
    	$data->OrigDate=$req->input('origin');
    	$data->desc=$req->input('desc');
    	if($req->hasfile('file'))
    	{
    		$file=$req->file('file');
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
    	LabReport::find($id)->delete();
    	Session::flash('alert','Data has been deleted successfully');
    	return redirect()->back();
    }
    public function update($id)
    {
    	
        $data =DB::table('patients') 
       ->join('visit4s','visit4s.pat_id','=','patients.id')
       ->join('lab_reports','lab_reports.visit4_id','=','visit4s.id')
       ->select('visit4s.id','lab_reports.iD','lab_reports.Type','lab_reports.PName','lab_reports.doctor','lab_reports.Location','lab_reports.date','lab_reports.OrigDate','lab_reports.desc','lab_reports.Attach','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
       ->where('lab_reports.iD',$id)
        ->get();
    	return view('Patient.LabReportUpdate',["data"=>$data]);
    }

    public function edit(Request $req){
       $data=LabReport::find($req->id);
    	$data->Type=$req->input('type');
    	$data->PName=$req->input('name');
    	$data->doctor=$req->input('doctor');
    	$data->Location=$req->input('location');
    	$data->date=$req->input('date');
    	$data->OrigDate=$req->input('origin');
    	$data->desc=$req->input('desc');
    	if($req->hasfile('file'))
    	{
    		$file=$req->file('file');
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
