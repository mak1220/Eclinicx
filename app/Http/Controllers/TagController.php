<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tag;
use Session;

class TagController extends Controller
{
    // Add Hospital
    public function tag(Request $req){
          $validate=$req->validate([
                'tag'=>'required|min:3|max:20',
        ]);
          
                 $rest = new tag;
                 $rest->Tag=$req->input('tag');
                 $rest->save();
                 $req->session()->flash('alert','Data entered successfully');
                  return redirect('tag');

    }

    public function tagShow()
    {
        $data=tag::all();
        return view('Patient.tag',["data"=>$data]);
    }
    
      public function tagdelete($id)
    {
        tag::find($id)->delete();
        Session::flash('alert','Data has been deleted successfully');
        return redirect('tag');
    }

    public function tagupdate($id)
    {
        $data=tag::find($id);
        return view('Patient.tagUpdate',["data"=>$data]);
    }
     public function tagedit(request $req)
    {
                 $rest=tag::find($req->id);
                 $rest->Tag=$req->input('tag');
                 $rest->save();
                 $req->session()->flash('alert','Data Updated successfully');
                  return redirect('tag');
    }
}
