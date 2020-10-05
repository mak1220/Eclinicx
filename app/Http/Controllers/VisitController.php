<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visit4;
use App\visit5;
use App\visi6;
use App\patient;
use Session;
use DB;

class VisitController extends Controller
{
   public function store(Request $req){
        $data3=new visit4;
        $data3->pat_id=$req->input('patient');
        $data3->Rson=$req->input('reason');
        $data3->Ref=$req->input('ref');
        $data3->Doct=$req->input('doctor');
        $data3->Date=$req->input('date');
        $data3->user=$req->input('user');
        $data3->Note=$req->input('grand');
        $id=$data3->save();
       
      if($id!=0)
      {
      foreach($req->prod as $item=>$v)
      {
             $data2=array(
                'visit4_id'=>$data3->id,
                'Prod'=>$req->prod[$item],
                'Stock'=>$req->stock[$item],
                'unit'=>$req->unitt[$item],
                'cost'=>$req->costt[$item],
                'Sub'=>$req->subtotal[$item],
                'Dcount'=>$req->dcount[$item],
                'total'=>$req->totall[$item],
            );
             visit5::insert($data2);

      }
        
      }

        $data=new visi6;
        $data->visit4_id=$data3->id;
        $data->Sub=$req->input('sub');
        $data->Discount=$req->input('disc');
        $data->Grand=$req->input('grand');
        $data->Advance=$req->input('advance');
        $data->Due=$req->input('due');
        $data->save();
      
      
        $req->session()->flash('alert','Visit has been Added succesfully');
        return redirect('patients');
    }

     public function show($id)
    {
        $data=DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
      ->select('visit4s.*','patients.ID','patients.Name')
      ->where('patients.ID',$id)
      ->get();
      return view('Patient.patientEncounter',["data"=>$data]);
    }
    public function delete($id){
        visit4::find($id)->delete();
        Session::flash('alert','Visit deleted succesfully');
         return redirect()->back(); 
    }
     public function update($id)
    {
        $data=DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
      ->select('visit4s.*','patients.ID','patients.Name')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.patientEncounterUpdate',["data"=>$data]);
    }
     public function edit(Request $req){
        $data3=visit4::find($req->id);
        $data3->pat_id=$req->input('patient');
        $data3->Rson=$req->input('reason');
        $data3->Ref=$req->input('ref');
        $data3->Doct=$req->input('doctor');
        $data3->Date=$req->input('date');
        $data3->user=$req->input('user');
        $data3->Note=$req->input('grand');
        $data3->save();
        $req->session()->flash('alert','Visit has been Updated succesfully');
        return redirect('patients');
       
    

    }
    

      public function send($id)
      {
        $data =DB::table('patients')
        ->join('patient2s','patient2s.patient_id','=','patients.id')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
      ->join('visit5s','visit5s.visit4_id','=','visit4s.id')
      ->join('visi6s','visi6s.visit4_id','=','visit4s.id')
      ->select('visit4s.Doct','visit4s.Rson','visit5s.*','visi6s.Sub','visi6s.Discount','visi6s.Grand','patients.ID','patients.Name','patients.Age','patients.Gender','patient2s.Reg')
      ->where('visit4s.id',$id)
      ->get();
      return view('Patient.patientInvoice',["data"=>$data]);
      }
     public function NoteEncounter($id){
      
      $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
    ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX')
      ->where('visit4s.id',$id)
      ->get();
       return view('Patient.NoteEncounter',["data"=>$data]);

     } 

   }