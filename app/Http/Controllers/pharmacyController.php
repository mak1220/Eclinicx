<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pharmacy;
use Session;

class pharmacyController extends Controller
{
	public function show(){
		$data=pharmacy::all();
		return view('PharmacyItem.pharmacyItem',["data"=>$data]);
	}
    public function pharmacy(Request $req){



          $validate=$req->validate([
                'name'=>'required',
                'gen'=>'required',
                'type'=>'required',
                'desc'=>'required',
                'count'=>'required',
                'count'=>'required',

        ]);

    	$data=new pharmacy;
    	$data->Item_Name=$req->input('name');
    	$data->Genaric_Name=$req->input('gen');
    	$data->Item_Type=$req->input('type');
    	$data->Item_Description=$req->input('desc');
    	$data->Item_Count=$req->input('count');
    	$data->Item_Cost=$req->input('cost');
    	$data->save();
    	$req->session()->flash('alert','PharmacyItems Successfully Entered');
    	return redirect('pharmacyItem');
    }

    public function delete($id)
    {
        pharmacy::find($id)->delete();
        Session::flash('alert','PharmacyItems has been deleted Successfully');
        return redirect('pharmacyItem');
    }

    public function update($id)
    {
        $data=pharmacy::find($id);
        return view('PharmacyItem.pharmacyUpdate',["data"=>$data]);
    }

    public function edit(Request $req){

        $data=pharmacy::find($req->id);
        $data->Item_Name=$req->input('name');
        $data->Genaric_Name=$req->input('gen');
        $data->Item_Type=$req->input('type');
        $data->Item_Description=$req->input('desc');
        $data->Item_Count=$req->input('count');
        $data->Item_Cost=$req->input('cost');
        $data->save();
        $req->session()->flash('alert','PharmacyItems has been Updated Successfully');
        return redirect('pharmacyItem');
    }


}
