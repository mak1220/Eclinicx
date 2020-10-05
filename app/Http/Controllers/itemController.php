<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemType;
use Session;

class itemController extends Controller
{
	public function show(){
		$data=itemType::all();
		return view('ItemType.itemType',["data"=>$data]);
	}
    public function itemType(Request $req){

               $validate=$req->validate([
                'type'=>'required|max:30',
                'desc'=>'required|max:40',
               

        ]);
               

    	$data= new itemType;
    	$data->ItemType=$req->input('type');
    	$data->ItemDescription=$req->input('desc');
    	$data->save();
    	$req->session()->flash('alert','Items Enterd Successfully');
    	return redirect('itemType');

    }

    public function delete($id)
    {
        itemType::find($id)->delete();
        Session::flash('alert','Items has been deleted Successfully');
        return redirect('itemType');
    }

    public function update($id)
    {
        $data=itemType::find($id);
        return view('ItemType.ItemUpdate',["data"=>$data]);
    }

    public function edit(Request $req){

        $data= itemType::find($req->id);
        $data->ItemType=$req->input('type');
        $data->ItemDescription=$req->input('desc');
        $data->save();
        $req->session()->flash('alert','Items has been Updated Successfully');
        return redirect('itemType');

    }
}
