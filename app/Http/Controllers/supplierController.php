<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use Session;

class supplierController extends Controller
{

	public function show(){

		$data=supplier::all();
		return view('Supplier.supplier',["data"=>$data]);
	}
    public function supplier(Request $req){


       $validate=$req->validate([
                'name'=>'required|min:3|max:30',
                'address'=>'required|max:35',
                'phone'=>'required|min:11|max:11',
                'mobile'=>'required|min:11|max:11',
                'email'=>'required|email',

        ]);


    	$data=new supplier;
    	$data->Supplier_Name=$req->input('name');
    	$data->Supplier_Address=$req->input('address');
    	$data->Supplier_Phone=$req->input('phone');
    	$data->Supplier_Mobile=$req->input('mobile');
    	$data->Supplier_Email=$req->input('email');
    	$data->save();
    	$req->session()->flash('alert','Supplier Enterd successfully');
    	return redirect('supplier');
    }
     public function delete($id)
     {
        supplier::find($id)->delete();
        Session::flash('alert','Supplier has been deleted successfully');
        return redirect('supplier');
     }

     public function update($id)
     {
        $data=supplier::find($id);
        return view('Supplier.supplierUpdate',["data"=>$data]);
     }
    
     public function edit(Request $req){

        $data=supplier::find($req->id);
        $data->Supplier_Name=$req->input('name');
        $data->Supplier_Address=$req->input('address');
        $data->Supplier_Phone=$req->input('phone');
        $data->Supplier_Mobile=$req->input('mobile');
        $data->Supplier_Email=$req->input('email');
        $data->save();
        $req->session()->flash('alert','Supplier has been Updated successfully');
        return redirect('supplier');
    }

}
