<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equip;
use App\Attach;
use Session;

class equipmentController extends Controller
{
	public function show()
	{
		$data=equip::all();
		return view('Equipment.equipment',["data"=>$data]);
	}
    public function equipment(Request $req){


         $validate=$req->validate([
                'name'=>'required|min:3|max:30',
                'purchas'=>'required',
                'maintinence'=>'required',
                'sup'=>'required',


        ]);

    	$data=new equip;
    	$data->Equipment_Name=$req->input('name');
    	$data->Purchase_Date=$req->input('purchas');
    	$data->Purchase_Maintinence=$req->input('maintinence');
    	$data->Equipment_Supplier=$req->input('sup');
    	if($req->hasfile('proof'))
    	{
    		$file=$req->file('proof');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Purchase_File=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Purchase_File='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Equipment has been Entered successfully');
    	return redirect('equipment');
    }

    public function delete($id)
    {
    	equip::find($id)->delete();
    	Session::flash('alert','Equipment has been deleted successfully');
    	return redirect('equipment');
    }
    public function update($id)
    {
    	$data=equip::find($id);
    	return view('Equipment.EquipUpdate',["data"=>$data]);
    }


   

    public function edit(Request $req){

    	$data=equip::find($req->id);
    	$data->Equipment_Name=$req->input('name');
    	$data->Purchase_Date=$req->input('purchas');
    	$data->Purchase_Maintinence=$req->input('maintinence');
    	$data->Equipment_Supplier=$req->input('sup');
    	if($req->hasfile('proof'))
    	{
    		$file=$req->file('proof');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Purchase_File=$filename;
    	}
    	else
    	{
    		return $req;
    		$data->Purchase_File='';
    	}
    	$data->save();
    	$req->session()->flash('alert','Equipment has been Updated successfully');
    	return redirect('equipment');
    }


            //Here is New Attachment code


    

    public function Attachment(Request $req){

        $validate=$req->validate([
                'name'=>'required|min:3|max:30',
                'file'=>'required',


        ]);

        $data=new Attach;
        $data->Attachment_Details=$req->input('name');
        if($req->hasfile('file'))
        {
            $file=$req->file('file');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'.$extension;
            $file->move('uploads/equipment/',$filename);
            $data->Attachment_FIle=$filename;
        }
        else
        {
            return $req;
            $data->Attachment_FIle='';
        }
        $data->save();
        $req->session()->flash('alert','Attachment has been Entered successfully');
        return redirect('EquipAttachment');
    }

    public function display()
    {
        $data=Attach::all();
        return view('Equipment.EquipAttachment',["data"=>$data]);
    }

    public function remove($id)
    {
        Attach::find($id)->delete();
        Session::flash('alert','Attachment has been Deleted successfully');
        return redirect('EquipAttachment');
    }


    public function AttachUpdate($id)
    {
        $dat=Attach::find($id);
        return view('Equipment.AttachmentUpdate',["dat"=>$dat]);
    }

    public function AttachEdit(Request $req){

        $data=Attach::find($req->id);
        $data->Attachment_Details=$req->input('name');
        if($req->hasfile('file'))
        {
            $file=$req->file('file');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'.$extension;
            $file->move('uploads/equipment/',$filename);
            $data->Attachment_FIle=$filename;
        }
        else
        {
            return $req;
            $data->Attachment_FIle='';
        }
        $data->save();
        $req->session()->flash('alert','Attachment has been Updated successfully');
        return redirect('EquipAttachment');
    }

    
    

  

}
