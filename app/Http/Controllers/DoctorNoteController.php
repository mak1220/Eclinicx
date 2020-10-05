<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Session;


class DoctorNoteController extends Controller
{
	public function show()
	{
		$data=Note::all();
		return view('DoctorNotes.DoctorNotes',["data"=>$data]);
	}
    public function DoctorNote(Request $req){


          $validate=$req->validate([
                'name'=>'required|min:3|max:30',
                'desc'=>'required|max:35',
                'pers'=>'required',

        ]);

    	$data=new Note;
    	$data->Note_Name=$req->input('name');
    	$data->Note_Description=$req->input('desc');
    	$data->Show_On_Prescription=$req->input('pers');
    	$data->save();
    	$req->session()->flash('alert','DoctorNote has been Entered Successfully');
    	return redirect('DoctorNotes');

    }
    public function delete($id)
    {
    	Note::find($id)->delete();
    	Session::flash('alert','DoctorNote has been deleted Successfully');
    	return redirect('DoctorNotes');
    }
    public function update($id)
    {
    	$data=Note::find($id);
    	return view('DoctorNotes.DoctorNoteUpdate',["data"=>$data]);
    }
    public function edit(Request $req){

        $data=Note::find($req->id);
        $data->Note_Name=$req->input('name');
        $data->Note_Description=$req->input('desc');
        $data->Show_On_Prescription=$req->input('pers');
        $data->save();
        $req->session()->flash('alert','DoctorNote has been Updated Successfully');
        return redirect('DoctorNotes');

    }
}
