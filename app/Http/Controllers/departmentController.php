<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\depart;
use Session;

class departmentController extends Controller
{
    public function show(){

        $data = depart::all();
        return view('Department.department',["data"=>$data]);
    }
    public function department(Request $req)
    {
       
         $validate=$req->validate([
                'name'=>'required|max:30',
                'phone'=>'required|min:11|max:11',
                'head'=>'required',

        ]);


        $data=new depart;
    	$data->Department_Name=$req->input('name');
    	$data->Phone_Number=$req->input('phone');
    	$data->Department_Head=$req->input('head');
    	$data->save();
    	$req->session()->flash('alert','Department Enterd successfully');
    	return redirect('department');
    }
     public function delete($id)
    {
        depart::find($id)->delete();
        Session::flash('alert','Department has been deleted successfully');
        return redirect('department');
    }

   public function update($id)
    {
        $data=depart::find($id);
        return view('Department.departUpdate',["data"=>$data]);
    }

    public function edit(Request $req)
    {
        $data=depart::find($req->id);
        $data->Department_Name=$req->input('name');
        $data->Phone_Number=$req->input('phone');
        $data->Department_Head=$req->input('head');
        $data->save();
        $req->session()->flash('alert','Department has beeb updated successfully');
        return redirect('department');
    }
    
    
    
}
