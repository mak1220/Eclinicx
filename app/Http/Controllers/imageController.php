<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\patient;
use App\visit4;
use DB;
Use Session;

class imageController extends Controller
{
    
   public function show(){

        $data = image::all();
        return view('Patient.image',["data"=>$data]);
    }
    public function store(Request $req)
    {
       
         $validate=$req->validate([
                
                'desc'=>'required|max:25',
                
                'file'=>'required',

        ]);


        $data=new image;
    	$data->visit4_id=$req->input('patient');
    	$data->Description=$req->input('desc');
    	
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
    		$data->File='';
    	}
        
    	$data->save();
    	$req->session()->flash('alert','image hse been entered successfully ');
    	return redirect()->back();
    }
     public function delete($id)
    {
        image::find($id)->delete();
        return redirect()->back()->with('alert','image hase been deleted succesfully');
    }

   public function update($id)
    {
        $data =DB::table('patients')
        ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->join('images','images.visit4_id','=','visit4s.id')
       ->select('visit4s.id','images.iD','images.Description','images.File','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
       ->where('images.iD',$id)
        ->get();
        return view('Patient.imageUpdate',["data"=>$data]);
    }

    public function edit(Request $req)
    {
        $data=image::find($req->id);
    	
    	$data->Description=$req->input('desc');
    
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
    		$data->File='';
    	}
    	$data->save();
    	$req->session()->flash('alert','image hse been updated successfully ');
    	return redirect()->back();
    }
    


}
