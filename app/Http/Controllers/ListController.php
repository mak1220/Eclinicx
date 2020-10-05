<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\purchase;
use App\item;
use Session;
use DB;

class ListController extends Controller
{
    public function newpurchase(Request $request)
    {

        $data=new purchase;
        $data->Sup_Name=$request->input('Supplier_Name');
        $data->Sup_Date=$request->input('Supplier_Date');
        $data->Desc=$request->input('Description');
        $data->Total=$request->input('total');
        if($request->hasfile('file'))
    	{
    		$file=$request->file('file');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Pur_Proof=$filename;
    	}
    	else
    	{
    		return $request;
    		$data->Pur_Proof='';
    	}
  
    	
        $id=$data->save();

        if($id!=0)
        {

         foreach($request->Stock_Item as $item=>$v)
         {
         
            $data2=array(
           'pur_id'=>$data->id,
           'Stock_Item'=>$request->Stock_Item[$item],
           'Batch'=>$request->Batch[$item],
           'Count'=>$request->Count[$item],
           'Cost'=>$request->Cost[$item],
           'Total'=>$request->Total[$item],

        ); 

        item::insert($data2);
           }
        }
       
       
      $request->session()->flash('alert','Data has been Added successfuly');
      return redirect('purchaseList');
    }


    public function show()
    {
        $data=purchase::all();
        return view('purchaseList.purchaseList',["data"=>$data]);
    }

 public function destroy($id)
    {
        purchase::find($id)->delete();
        Session::flash('alert','Purchase List has been deleted Successfully');
        return redirect('purchaseList');
    }

    public function update($id)
    {
        $data=purchase::find($id);
        return view('purchaseList.purchaseUpdate',["data"=>$data]);
    }

    public function Edit(Request $request)
    {

        $data=purchase::find($request->id);
        $data->Sup_Name=$request->input('Supplier_Name');
        $data->Sup_Date=$request->input('Supplier_Date');
        $data->Desc=$request->input('Description');
        $data->Total=$request->input('total');
        if($request->hasfile('file'))
    	{
    		$file=$request->file('file');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time(). '.'.$extension;
    	    $file->move('uploads/equipment/',$filename);
    	    $data->Pur_Proof=$filename;
    	}
    	else
    	{
    		return $request;
    		$data->Pur_Proof='';
    	}
  
    	
        $id=$data->save();

        
       
       
      $request->session()->flash('alert','Data has been Added successfuly');
      return redirect('purchaseList');
    }
}
