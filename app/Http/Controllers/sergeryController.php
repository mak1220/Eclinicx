<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProAndSer;
use App\patient;
use App\visit4;
use DB;
use Session;

class sergeryController extends Controller
{
   /* public function show()
	{
		$pro=ProAndSer::all();
		return view('Patient.ProceduresAndSergeries',["pro"=>$pro]);
	}*/
    public function store(Request $req){


         $validate=$req->validate([
                'name'=>'required|min:3|max:30',
                'doctor'=>'required',
                'hospital'=>'required',
                'date'=>'required',
                'origin'=>'required',
                'desc'=>'required|max:30',
                'file'=>'required',
        ]);

    	$data=new ProAndSer;
        
        $data->visit4_id=$req->input('patient');
    	$data->Sergery_Name=$req->input('name');
    	$data->Sergery_Doctor=$req->input('doctor');
    	$data->Sergery_Hospital=$req->input('hospital');
    	$data->Sergery_Date=$req->input('date');
    	$data->Origin_Date=$req->input('origin');
    	$data->Sergery_Description=$req->input('desc');
    	if($req->hasfile('file'))
    	{
    		$file=$req->file('file');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Sergery_Attachment=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Sergery_Attachment='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Data has been Entered successfully');

    	return redirect()->back();
    }

    public function delete($id)
    {
    	ProAndSer::find($id)->delete();
    	Session::flash('alert','Data has been deleted successfully');
    	return redirect()->back();
    }
    public function update($id)
    {
        $data =DB::table('patients')
       ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->join('pro_and_sers','pro_and_sers.visit4_id','=','visit4s.id')
       ->select('visit4s.id','pro_and_sers.iD','pro_and_sers.Sergery_Name','pro_and_sers.Sergery_Doctor','pro_and_sers.Sergery_Hospital','pro_and_sers.Sergery_Date','pro_and_sers.Origin_Date','pro_and_sers.Sergery_Description','pro_and_sers.Sergery_Attachment','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
       ->where('pro_and_sers.iD',$id)
        ->get();
    	return view('Patient.ProAndSerUpdate',["data"=>$data]);
    }

    public function edit(Request $req){

    	$data=ProAndSer::find($req->id);
    	$data->Sergery_Name=$req->input('name');
    	$data->Sergery_Doctor=$req->input('doctor');
    	$data->Sergery_Hospital=$req->input('hospital');
    	$data->Sergery_Date=$req->input('date');
    	$data->Origin_Date=$req->input('origin');
    	$data->Sergery_Description=$req->input('desc');
    	if($req->hasfile('file'))
    	{
    		$file=$req->file('file');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Sergery_Attachment=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Sergery_Attachment='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Data has been Entered successfully');
    	return redirect()->back();
    }


            //Here is New Attachment code
    

}
