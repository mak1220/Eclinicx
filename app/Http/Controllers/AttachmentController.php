<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attachment;
use App\patient;
use App\visit4;
use DB;
use Session;

class AttachmentController extends Controller
{
   public function show(){

        $data = Attachment::all();
        return view('Patient.EncounterAttach',["data"=>$data]);
    }
    public function store(Request $req)
    {
       
         $validate=$req->validate([
                'name'=>'required|max:20',
                'desc'=>'required|max:25',
                'type'=>'required',
                'file'=>'required',

        ]);


        $data=new Attachment;
        $data->visit4_id=$req->input('patient');
    	$data->PName=$req->input('name');
    	$data->desc=$req->input('desc');
    	$data->Type=$req->input('type');
    	if($req->hasfile('file'))
    	{
    		$file=$req->file('file');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->File=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Purchase_File='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Data hse been entered successfully ');
    	return redirect()->back();
    }
     public function delete($id)
    {

        Attachment::find($id)->delete();
        return redirect()->back()->with('alert','Data hase been deleted succesfully');
    }

   public function update($id)
    {
        $data =DB::table('patients')
        ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->join('attachments','attachments.visit4_id','=','visit4s.id')
       ->select('visit4s.id','attachments.iD','attachments.Type','attachments.PName','attachments.desc','attachments.File','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
       ->where('attachments.iD',$id)
        ->get();
        return view('Patient.EncounterAttachmentUpdate',["data"=>$data]);
    }

    public function edit(Request $req)
    {
        $data=Attachment::find($req->id);
    	$data->PName=$req->input('name');
    	$data->desc=$req->input('desc');
    	$data->Type=$req->input('type');
    	if($req->hasfile('file'))
    	{
    		$file=$req->file('file');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->File=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Purchase_File='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Data hse been updated successfully ');
    	return redirect()->back();
    }
    
}
