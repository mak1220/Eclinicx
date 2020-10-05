<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pharmacy;
use DB;
class purchaseController extends Controller
{
    public function purchaseList(){
    	return view('purchaseList.purchaseList');
    }

    public function newpurchaseList(){
    	$purch=pharmacy::all();
    	return view('purchaseList.newpurchaselist',compact('purch'));
    }
    public function findPrice(Request $req)
    {
        $p=pharmacy::select('Item_Cost','Item_Count')->where('Item_Name',$req->id)->first();
        return response()->json($p);
    }
}
