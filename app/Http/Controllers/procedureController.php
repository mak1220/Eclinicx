<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proced;
use Session;

class procedureController extends Controller
{

	public function show(){
		$data =proced::all();
		return view('Procedure.procedure',["data"=>$data]);
	}
    public function procedure(Request $req){


          $validate=$req->validate([
                'name'=>'required|min:3|max:30',
                'charges'=>'required',
                'head'=>'required',

        ]);
        
    	$data = new proced;
    	$data->Procedure_Name=$req->input('name');
    	$data->Prodecure_Charges=$req->input('charges');
    	$data->Procedure_Department=$req->input('head');
    	$data->save();
    	$req->session()->flash('alert','Procedure Enterd successfully');
    	return redirect('procedure');

    }

    public function delete($id)
    {
        proced::find($id)->delete();
        Session::flash('alert','Procedure has been deleted successfully');
        return redirect('procedure');
    }

    public function update($id)
    {
        
         $data=proced::find($id);
         return view('Procedure.proUpdate',["data"=>$data]);
    }

    public function edit(Request $req){

        $data = proced::find($req->id);
        $data->Procedure_Name=$req->input('name');
        $data->Prodecure_Charges=$req->input('charges');
        $data->Procedure_Department=$req->input('head');
        $data->save();
        $req->session()->flash('alert','Procedure has been Updated successfully');
        return redirect('procedure');

    }
    public function findCost(Request $req)
    {
        $p=proced::select('Prodecure_Charges')->where('Procedure_Name',$req->id)->first();
        return response()->json($p);
    }
    
}
