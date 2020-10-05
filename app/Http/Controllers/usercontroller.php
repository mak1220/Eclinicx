<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dash;
use App\group;
use Session;

class usercontroller extends Controller
{

   public function show(){

    $data=dash::all();
    return view('user.user',["data"=>$data]);
   }

    public function user(Request $req){
          $validate=$req->validate([
                'first'=>'required|alpha_num|min:3|max:10',
                'last'=>'required|min:3|max:10',
                'company'=>'required|min:5|max:15',
                'email'=>'required|email',
                'phone'=>'required|min:11|max:11',
                'password'=>'required|min:6|max:20',
                'cpassword'=>'required|min:6|max:20',

        ]);
        //enter new entry
          $data=$req->input();
          if(!empty($data))
          { 
            if($req->input('password')==$req->input('cpassword'))
            {
                 $rest = new dash;
                 $rest->FirstName=$req->input('first');
                $rest->LastName=$req->input('last');
                 $rest->company=$req->input('company');
                $rest->email=$req->input('email');
                $rest->phone=$req->input('phone');
                 $rest->password=$req->input('password');
                 $rest->confirm_password=$req->input('cpassword');
                 $rest->save();
                $req->session()->flash('alert','User Enterd successfully');
                 return redirect('user');
            }
            else
            {
                $req->session()->flash('alert','Please enter correct password');
                return redirect('user');

            }
        

          }
    	

    }

    public function delete($id)
    {
        dash::find($id)->delete();
        Session::flash('alert','User has been deleted successfully');
        return redirect('user');
    }

    public function update($id)
    {
        $data=dash::find($id);
        return view('user.update',["data"=>$data]);
    }

    public function edit(Request $req)
    {
        
     
        $rest = dash::find($req->id);
        $rest->FirstName=$req->input('first');
        $rest->LastName=$req->input('last');
        $rest->company=$req->input('company');
        $rest->email=$req->input('email');
        $rest->phone=$req->input('phone');
        $rest->password=$req->input('password');
        $rest->confirm_password=$req->input('cpassword');
        $rest->save();
        $req->session()->flash('alert','User update successfully');
        return redirect('user');

    }


 public function profile($id)
    {
        $data=dash::find($id);
        return view('user.UserProfile',["data"=>$data]);
    }

    //Add group

public function add(Request $req){
          $validate=$req->validate([
                'group'=>'required|min:3|max:20',
        ]);
          
                 $rest = new group;
                 $rest->Group=$req->input('group');
                 $rest->save();
                 $req->session()->flash('alert','Data entered successfully');
                  return redirect('group');

    }

    public function groupShow()
    {
        $data=group::all();
        return view('user.group',["data"=>$data]);
    }
    
      public function groupdelete($id)
    {
        group::find($id)->delete();
        Session::flash('alert','Group has been deleted successfully');
        return redirect('group');
    }

    public function groupupdate($id)
    {
        $data=group::find($id);
        return view('user.groupUpdate',["data"=>$data]);
    }
     public function groupedit(request $req)
    {
                 $rest=group::find($req->id);
                 $rest->Group=$req->input('group');
                 $rest->save();
                 $req->session()->flash('alert','Data Updated successfully');
                  return redirect('group');
    }
    


   

    
}
