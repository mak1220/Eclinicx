<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imaging;
use App\patient;
use App\visit4;
use DB;
use Session;

class imagingController extends Controller
{
     public function show()
	{
		$pro=imaging::all();
		return view('Patient.Imaging',["pro"=>$pro]);
	}
    public function store(Request $req){

    	$data=new imaging;
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
    	imaging::find($id)->delete();
    	Session::flash('alert','Data has been deleted successfully');
    	return redirect()->back();
    }
    public function update($id)
    {
        $data =DB::table('patients')
        ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->join('imagings','imagings.visit4_id','=','visit4s.id')
       ->select('visit4s.id','imagings.iD','imagings.Type','imagings.PName','imagings.doctor','imagings.Location','imagings.date','imagings.OrigDate','imagings.desc','imagings.Attach','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
       ->where('imagings.iD',$id)
        ->get();
    	return view('Patient.ImagingUpdate',["data"=>$data]);
    }

    public function edit(Request $req){
       $data=imaging::find($req->id);
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
