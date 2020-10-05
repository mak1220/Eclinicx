<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vital;
use Session;

class vitalController extends Controller
{
    public function store(Request $req)
    {

     $data=new vital;
     $data->Weight=$req->input('weight');
     $data->Height=$req->input('height');
     $data->BMI=$req->input('bmi');
     $data->Temperature=$req->input('temp');
     $data->BP=$req->input('bp');
     $data->RR=$req->input('rr');
     $data->Pulse=$req->input('pulse');
     $data->save();
     $req->session()->flash('alert','data successfully enterd');
     return redirect()->back();
    
    }

    public function show()
    {
        $vital=vital::all();
        return view('Patient.PastVites',["vital"=>$vital]);
    }
}
