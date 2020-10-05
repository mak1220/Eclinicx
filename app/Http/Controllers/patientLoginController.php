<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\visit4;
use DB;
use Session;


class patientLoginController extends Controller
{


    public function patientLogin(){
        return view('Patient.patientLogin');
    }

   public function patients(){
        return view('Patient.patients');
    }
    public function AddUpdateEncounter(){
        return view('Patient.AddUpdateEncounter');
    }
    public function patientEncounter(){
        return view('Patient.patientEncounter');
    
    }
    public function patientInvoice(){
        return view('Patient.patientInvoice');
    }

    public function perscription(){
        return view('Patient.perscription');
    }

    
    public function NoteEncounter(){
        return view('Patient.NoteEncounter');
    }
     

     public function OrderEncounter($id){
         $data =DB::table('patients')
        ->join('visit4s','visit4s.pat_id','=','patients.id')
         ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
        ->where('visit4s.id',$id)
        ->get();
        return view('Patient.OrderEncounter',["data"=>$data]);
    }
  
     public function NurseOrder($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
     ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.NurseOrder',["data"=>$data]);
    }
    
     public function EncounterAttach($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
     ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.EncounterAttach',["data"=>$data]);
    }
    public function image($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
     ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.image',["data"=>$data]);
    }
    
    public function refferel($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
     ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.refferel',["data"=>$data]);
    }

    
     public function Sign($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
     ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.Sign',["data"=>$data]);
    }
    public function vital(){
        return view('Patient.vital');
    }
    public function Encounter($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
    ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.Encounter',["data"=>$data]);
    }
    public function ProceduresAndSergeries($id){
        $data =DB::table('patients')
      ->join('visit4s','visit4s.pat_id','=','patients.id')
    ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
      ->where('visit4s.id',$id)
      ->get();
        return view('Patient.ProceduresAndSergeries',["data"=>$data]);
    }
    public function PastMedication($id){
         $data =DB::table('patients')
         ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
         ->where('visit4s.id',$id)
         ->get();
        return view('Patient.PastMedication',["data"=>$data]);
    }
    public function PastNotes($id){
         $data =DB::table('patients')
         ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
         ->where('visit4s.id',$id)
         ->get();
        return view('Patient.PastNotes',["data"=>$data]);
    }
     public function PastVites($id){
        $data =DB::table('patients')
         ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
         ->where('visit4s.id',$id)
         ->get();
        return view('Patient.PastVites',["data"=>$data]);
    }
     public function LabReports($id){
        $data =DB::table('patients')
         ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
         ->where('visit4s.id',$id)
         ->get();
        return view('Patient.LabReports',["data"=>$data]);
    }
     public function Imaging($id){
        $data =DB::table('patients')
         ->join('visit4s','visit4s.pat_id','=','patients.id')
        ->select('visit4s.*','patients.ID','patients.Name','patients.Age','patients.MRNX','patients.Phone')
         ->where('visit4s.id',$id)
         ->get();
        return view('Patient.Imaging',["data"=>$data]);
    }


    
}
