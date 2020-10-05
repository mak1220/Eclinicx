<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Nexmo\Laravel\Facade\Nexmo;
use App\patient;
use App\Patient2;
use App\visit4;
use DB;

class smsController extends Controller
{

    public function show(){
        $data=patient::all();
        return view('Patient.patients',["data"=>$data]);
    }

     public function store(Request $req)
     {
            
          


            $data=new patient;
            $data->MRNX=$req->input('mrnx');
            $data->Name=$req->input('name');
            $data->Gender=$req->input('gender');
            $data->Age=$req->input('age');
            $data->Address=$req->input('address');
            $data->Phone=$req->input('phone');
            $data->Discount=$req->input('disc');
            $data->DiscountCash=$req->input('cash');
            $data->save();
            $data2=array(
                'patient_id'=>$data->id,
                'Reg'=>$req->input('reg'),
                'cnic'=>$req->input('nic'),
                'Reference'=>$req->input('ref'),
                'Tag'=>$req->input('tag'),
                'Remark'=>$req->input('mark'),
                'File'=>$req->input('file'),
       
            );
          
             patient2::insert($data2);
           
        $req->session()->flash('alert','Patient has been Entered successfully');
        return redirect('patients');



     }

      public function delete($id)
    {
        patient::find($id)->delete();
        Session::flash('alert','Patient has been deleted Successfully');
        return redirect('patients');
    }


    public function update($id)
    {
        $data=patient::find($id);
        return view('Patient.patientListUpdate',["data"=>$data]);
    }
     public function edit(Request $req)
     {
            
            $data=patient::find($req->id);
            $data->MrnX=$req->input('mrnx');
            $data->Name=$req->input('name');
            $data->Gender=$req->input('gender');
            $data->Age=$req->input('age');
            $data->Address=$req->input('address');
            $data->Phone=$req->input('phone');
            $data->Discount=$req->input('disc');
            $data->DiscountCash=$req->input('cash');
          
         
       
        $data->save();
        $req->session()->flash('alert','Patient has been Updated successfully');
        return redirect('patients');


     }

     public function senddata($id){

        $send=patient::find($id);
        
        return view('Patient.AddUpdateEncounter',["send"=>$send]);

     }
    public function patientEncounter($id)
    {
        $patient=patient::find($id);
        
        return view('Patient.patientEncounter',["patient"=>$patient]);
    }

     public function Encounter($id){

        $patient=patient::find($id);
        return view('Patient.UpdateEncounter',["patient"=>$patient]);

     }
     public function NoteEncounter($id)
     {
        
        return view('Patient.NoteEncounter');
     }
   
   


    public function sendSms(Request $request)
    {
        // return $request;
        if($request->English)
        {


        Nexmo::message()->send([
            'to' =>$request->phone,
            'from' => '+923124126004',
            'text' =>'Hello how are you  mubashar....',
        ]);
        Session::flash('alert','Patient has been Entered Successfully');
        return redirect('patientLogin');
    }
    if($request->Urdu)
        {


        Nexmo::message()->send([
            'to' =>$request->phone,
            'from' => '+923124126004',
            'text' =>'مبشر آپ کیسے ہیں جناب؟',
        ]);
    }
       
       if($request->Nosms)
        {


        Nexmo::message()->send([
            'to' =>$request->phone,
            'from' => '+923124126004',
            'text' =>'nothing',
        ]);
    }
        //Session::flash('alert', 'Message sent successfully');
        //return redirect('/');
    }
}
